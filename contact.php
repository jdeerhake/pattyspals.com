<?php include('include/header.php'); ?>
<div id="twoCol">
	<div class="leftCol">
		<h2>Contact Us</h2>
		<div class="formHolder">
			<p>Please fill out the form below to contact Patty's Pals directly</p>
			<form id="contactForm" action="submit.php" method="post" class="transform">
			<div class="formRow">
				<label for="yourName">Your Name</label>
				<input type="text" id="yourName" name="yourName" title="Your Name" />
			</div>
			<div class="formRow">
				<label for="contactType">How should we contact you?</label>
				<select id="contactType" name="contactType" class="change" title="Preferred Method of contact">
					<option value="Email Address">Email</option>
					<option value="Phone Number">Phone</option>
					<option value="Address">Address</option>
				</select>
			</div>
			<div class="formRow">
				<label for="contactValue" id="contactValueLabel" class="changeLabel">Email Address</label>
				<input type="text" id="contactValue" name="contactValue" title="Contact Address" />			
			</div>
			<div class="formRow">
				<label for="message">Your Message</label>
				<textarea id="message" name="message"></textarea>
			</div>
			<div class="formRow">
				<input type="hidden" name="formName" value="contactForm" />
				<input type="submit" class="submit" value="Send" />
			</div>
			</form>
		</div>
	</div><!-- leftCol -->
	<div class="rightCol">
		<h4>Other ways to contact us:</h4>
		<p>Email: <a href="mailto:pattyspals@gmail.com">pattyspals@gmail.com</a></p>
		<p>Phone: 419-296-9911</p>
	</div><!-- rightCol -->
	<div class="clearFloat"></div>
</div><!-- eventsSummary -->
<?php include('include/footer.php'); ?>
