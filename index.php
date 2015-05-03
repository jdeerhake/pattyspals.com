<?php include('include/header.php'); ?>
<div class="colorContent roundedCorners">
	<div class="top roundedCorners">
		<div class="imageHolder">
			<img class="rightImage" id="mainPic" src="images/photos/patty.jpg" alt="Patty" />
		</div>


		<h2 style="margin-top: -10px;">Welcome to PattysPals.com</h2>
		<p>We are an organization dedicated to honoring our friend and loved one Patty Rojas, as well as supporting the journey of other pancreatic cancer sufferers in any way we can. And we could use your help!</p>
		<p>We hold our annual memorial event Patty’s Purse Bingo in November to celebrate the life of Patty and others who have suffered through the trial of pancreatic cancer.  Our goal is to raise funds in Patty’s name to fight this disease and to increase awareness through positive events that bring caring people together.  Please look at our <a href="events.php">Events page</a> for more information.</p>
		<p><a href="aboutpatty.php">Click here</a> to learn more about Patty, why she's so special, and why Patty’s Pals needs YOUR help!</p>
	</div>
	<div class="bottom">
		<?php
			$i = rand(0, 1);
			switch($i) {
				case '0': ?>
					<span class="nextEvent">Pancreatic Cancer Month Kickoff</span>
					<a href="/events.php" class="ctaButton">Click here!</a>
				  <h2 class="ctaText">Monday November 2, 2015, 8am-2pm</h2>
				<?php break;
				default: ?>
					<span class="nextEvent">Patty's Purse Bingo, Delphos Eagles</span>
					<a href="/events.php" class="ctaButton">Click here!</a>
				  <h2 class="ctaText">Saturday November 21st, 2015, 5:30pm</h2>
				<?php break; ?>
		<?php } ?>
	</div>
</div><!-- colorContent -->
<?php include('include/footer.php'); ?>

