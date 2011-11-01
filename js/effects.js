var navHighlight = {
	init : function() {
		this.navLinks = $("div#topNav a");
		this.currentPage = window.location.href.split('/').pop().split('.')[0];
		this.highlightCurrent();
	},
	highlightCurrent : function() {
		this.navLinks.removeClass("current");
		if(this.currentPage === "") this.currentPage = "index";
		var toHl = document.getElementById(this.currentPage);
		if(!(toHl === null))
			toHl.className = "current";
	}
}

var formFunctions = {
	init : function() {
		$(".transform").jqTransform();
		$(".change").change(formFunctions.selectChange);
		$("select#shirtSize").change(formFunctions.updateAmount).trigger("change");
		$("form").submit(formFunctions.ajaxSubmit);
		$("a#showReg").bind("click", formFunctions.slideForm);
		$("a#topReg").bind("click", formFunctions.showFormScroll);
		$(".hide").hide();
	},
	selectChange : function() {
		$(".changeLabel").text($(this).children(":selected").attr("value"));
	},
	ajaxSubmit : function() {
		if($("input#release").length && !$("input#release").attr("checked")) {
			$("td.noRelease").slideDown(200);
			return false;
		}
//		var formEl = $(this);
		var formEl = $("input, select, textarea");
		var load = $(".loadHidden");
		var formHolder = $("div.formHolder");
		var postvars = formEl.serialize();
		formHolder.slideUp(300, function() {
			formHolder
				.html("")
				.slideDown(100);
			load
				.remove()
				.removeClass("loadHidden")
				.addClass("load")
				.appendTo(".formHolder");
			//alert(postvars);
			$.post('submit.php', postvars, function(data) {
				if(data) {
					formHolder
						.fadeOut(300, function() {
							formHolder
								.html(data)
								.fadeIn(300);
						});
				}
			});
		});
		return false;
	},
	showFormScroll : function() {
		$("div.formHolder").show();
		window.location.href="#entry";

	},
	slideForm : function() {
		$("div.formHolder").slideDown("300");
	},
	updateAmount : function() {
		if($(this).children(":selected").attr("value") === "No Shirt" && $(this).hasClass("5k")) {
			$("span#amt").text("$10");
			$("input#amtStore").attr("value", "$10");
		} else if ($(this).hasClass("5k")) {
			$("span#amt").text("$15");
			$("input#amtStore").attr("value", "$15");
		} else if ($(this).children(":selected").attr("value") === "No Shirt" && $(this).hasClass("tottrot")) {
			$("span#amt").text("$5");
			$("input#amtStore").attr("value", "$5");
		} else if ($(this).hasClass("tottrot")) {
			$("span#amt").text("$10");
			$("input#amtStore").attr("value", "$10");
		}
	}
}

var pictureCycle = {
	init : function() {
	  var list = [];

	  jQuery.ajax({
      url : "http://api.flickr.com/services/feeds/photoset.gne?set=72157627901194815&nsid=69287246@N07&lang=en-us&format=json",
      dataType : "jsonp",
      jsonp : "jsoncallback",
      success : function(data) {
        var pics = data.items.sort(randomize), cur, url;
        var i = 0, x = pics.length;

        for(i = 0; i < x; i++) {
          url = pics[i].media.m.replace("_m.jpg", "_z.jpg");
          cur = $("<img src='" + url + "' alt='Patty' class='rightImage loadHidden' />").appendTo("body");
          list.push(cur);
        }
        pictureCycle.pictList = list;
        pictureCycle.startCycle();

        function randomize(a, b) {
          return( parseInt( Math.random()*10 ) % 2 );
        }
      }
    });
	},
	startCycle : function() {
		this.i = 0;
		setInterval("pictureCycle.next()", 4000);
	},
	next : function() {
		var current = $("#mainPic");
		var newPic = this.pictList[this.i];
		newPic.remove().insertAfter(current).hide().removeClass("loadHidden");
		current.attr("id", "").fadeOut(600)
		newPic.attr("id", "mainPic").fadeIn(600, function() {
			current.remove();
		});
		this.i++;
		if(this.i >= this.pictList.length) {
			this.i = 0;
		}
	}
}

$(document).ready(function() {
	navHighlight.init();
	formFunctions.init();
	if(navHighlight.currentPage == "index") {
		pictureCycle.init();
	}
});

