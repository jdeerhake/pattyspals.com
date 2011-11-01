<?php include('include/header.php'); ?>
<div class="colorContent roundedCorners">
	<div class="top roundedCorners">
		<div class="imageHolder">
			<img class="rightImage" id="mainPic" src="images/photos/patty7.jpg" alt="Patty" />
		</div>
		<h2 style="margin-top: -10px;">Welcome to PattysPals.com</h2>
		<p>We are an organization dedicated to helping our friend Patty in any way we can.  And we could use your help!</p>
		<p>We are organizing a number of events in the coming months and it would be great if you could attend.  Please look at our <a href="events.php">Events page</a> for more information.</p>
		<p><a href="aboutpatty.php">Click here</a> to learn more about Patty, why she's so special, and why she's in need of your help.</p>
	</div>
	<div class="bottom">
		<?php
			$i = rand(0, 2);
			switch($i) {
				case '0': ?>
					<span class="nextEvent">Patty's Day 2010 Pics</span>
				  <a href="http://www.flickr.com/photos/69287246@N07/sets/72157628025996758/" target="_blank" class="ctaButton">Click here!</a>
				  <h2 class="ctaText">We now have pictures and results from Patty's Day!</h2>
				<?php break;
				case '1': ?>
					<span class="nextEvent">Patty in WLIO</span>
				  <a href="http://www.hometownstations.com/story/15771514/fighting-pancreatic-cancer" target="_blank" class="ctaButton">Click here!</a>
				  <h2 class="ctaText">Patty featured on WLIO</h2>
				<?php break;
				default: ?>
					<span class="nextEvent">Patty's Chicken BBQ Pics</span>
				  <a href="http://www.flickr.com/photos/69287246@N07/sets/72157627901216367/" target="_blank" class="ctaButton">Click here!</a>
				  <h2 class="ctaText">We now have pictures Patty's Chicken BBQ!</h2>
				<?php break;
			} ?>
	</div>
</div><!-- colorContent -->
<?php include('include/footer.php'); ?>

