		<div class="whiteContent roundedCorners">
			<div class="trioBox left">
				<div class="top">
					<img class="bigIcon" src="images/calendar.png" />
					<h3 class="boxTitle">Upcoming Events</h3>
					<span class="item">
						<strong>Ongoing - </strong>
						<a href="#">Patty's Pals Bracelet Sale</a>
					</span>
					<span class="item">
					  More coming soon!
					</span>
				</div>
				<div class="bottom">
					<a href="events.php">More...</a>
				</div>
			</div>
			<div class="trioBox center">
				<div class="top">
					<img class="icon" src="images/quote.png" title="Blog" />
					<h3 class="boxTitle">News</h3>
					<?php include('news.php'); ?>
				</div>
				<div class="bottom">
					<a href="http://www.caringbridge.org/visit/pattyrojas/">More...</a>
				</div>
			</div>
			<div class="trioBox right">
				<div class="top">
					<img class="icon" src="images/blog.png" title="Help" />
					<h3 class="boxTitle">Ways to Help</h3>
					<div class="clearFloat"></div>
					<span class="item">
						<a href="donate.php">Donate to Patty's family</a>
					</span>
					<span class="item">
						<a href="events.php">Participate in a fund raising event</a>
					</span>
					<span class="item">
						Distribute flyers to help raise awareness:
						<ul>
							<li>
								<a href="files/pattysday_flyer1.doc">Patty's Day Flyer</a>
							</li>
						</ul>
					</span>
				</div>
				<div class="bottom">
					<!--<a href=#>More...</a>-->
				</div>
			</div>
		</div><!-- whiteContent -->
	</div><!-- innerWrap -->
</div><!-- mainContent -->
<div id="footer">
	<div class="innerWrap">
		<div id="copyright">
			<p>&copy; 2010</p>
		</div>
		<div id="footerNav">
			<ul class="hMenu">
				<li><a href="index.php">Home</a></li>
				<li><a href="aboutus.php">About Us</a></li>
				<li><a href="aboutpatty.php">About Patty</a></li>
				<li><a href="donate.php">Donate</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div><!--footerNav -->
		<div class="clearFloat"></div>
	</div><!-- innerWrap -->
</div><!-- footer -->
<img src="images/load.gif" alt="Loading..." class="loadHidden" />
<script src="js/jquery-1.4.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jquery.jqtransform.js"></script>
<script src="js/effects.js"></script>
<!--[if IE]>
	<script src="js/jquery.corner.js"></script>
	<script src="js/ie.js"></script>
<![endif]-->
<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-16535944-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
</script>

</body>

</html>
