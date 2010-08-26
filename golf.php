<?php header('Location: res.php'); ?>
<?php include('include/header.php'); ?>
<div id="twoCol">
	<div class="leftCol event">
		<h2>Puttin’ Fore Patty Golf Scramble</h2>
		<h3 class="subTitle">July 3rd at Country Acres Golf Course, Kalida, Ohio</h3>
		<img src="images/golf.jpg" alt="golf scramble" class="floatRight" />
		<p><a href="javascript:void(0)" id="topReg">Register now!</a></p>
		<p>Play golf for a good cause.  Food, Auction, Live Band, Lots of Activities all evening!</p>
		<dl>
			<dt>When &amp; Where</dt>
				<dd class="noSpace">Saturday, July 3rd - 2:00 pm Shotgun</dd>
				<dd><a href="http://www.countryacresgolfclub.com/golf/proto/countryacresgolfclub/">Country Acres Golf Course, Kalida</a></dd>
			<dt>Fees</dt>
				<dd>$220 per 4 person team ($55/player), includes golf cart, BBQ chicken dinner (to follow) and all the FUN you can have!!</dd>
			<dt>Questions?</dt>
				<dd>Contact Larry Heiing: 419-302-9624 or <a href="mailto:ldheiing6@hotmail.com">ldheiing6@hotmail.com</a></dd>
			<dt>Want to sponsor the event?</dt>
				<dd>Download a <a href="files/golf_sponsor.doc">sponsorship form</a>.</dd>
			<dt id="entry">Entry Options</dt>
				<dd class="noSpace">Download an <a href="files/golf_reg.pdf">entry form</a>, fill it out, and mail it with a check to: 
					<dl><dd>Patty’s Pals, 501 E. Third St, Delphos, OH 45833</dd></dl>
				</dd>
				<dd>Or <a href="javascript:void(0)" id="showReg">click here</a> to fill out an entry form online</dd>
		</dl>
		<div class="formHolder withBorder hide">
			<form id="regForm" action="submit.php" method="post" class="transform">
			<div class="formRow">
				<h4>Patty's Day Golf Scramble Entry form</h4>
			</div>
			<div class="formRow">
				<label for="yourName">Team Captain</label>
				<input type="text" id="yourName" name="yourName" title="Your Name" />
			</div>
			<div class="formRow">
				<label for="email">Email Address</label>
				<input type="text" id="email" name="email" title="Email Address" />
			</div>
			<div class="formRow">
				<label for="message">Other Team Members (3)</label>
				<textarea id="message" name="members"></textarea>
			</div>
			<div class="formRow">
				<table>
					<tr>
						<td colspan=2 class="pad noRelease">Please agree to the waiver</td>
					</tr>
					<tr>
						<td class="pad"><input type="checkbox" name="release" id="release" /></td>
						<td class="pad"><p>I hereby release &amp; discharge Country Acres Golf Course, St. Ritas Medical Center, Race Officials,Sponsors and Volunteers from any liability for injuries from participation in this event. I am fit for this event.</p></td>
					</tr>
				</table>
			</div>
			<div class="formRow">
				<p id="amtShow">Amount owed: <span id="amt">$220</span></p>
				<input type="hidden" name="amt" id="amtStore" value="$220" />
				<input type="hidden" name="formName" value="golfreg" />
				<input type="submit" value="Submit" class="submit" />
				<div class="clearFloat"></div>
			</div>
			<!--<div class="formRow">
				<p>Fill out this form and send a check for the appropriate amount to:
					<dl><dd>Patty’s Pals 5K, 501 E. Third St, Delphos, OH 45833</dd></dl>
				</p>
				<p>If the name on the check differs from entry name, please make note of it with the check.</p>
			</div>-->
			</form>
		</div>
	</div><!-- leftCol -->
	<div class="rightCol">
		<h4>Not your style?</h4>
		<p>Try one of the other Patty's Day events:</p>
		<ul class="otherEvents">
			<li><a href="5k.php">Pounding Pavement for Patty 5k</a></li>
			<li><a href="tottrot.php">Playin' for Patty Tot Trot</a></li>
			<li><a href="dogjog.php">Pooches for Patty Dog Jog</a></li>
		</ul>
		<h4>We also accept donations</h4>
		<p>100% of your donation will be given to Patty's family.<p>
		<div>Please make checks payable to "Patty's Pals" and mail them to:
			<ul class="address">
				<li>501 East 3rd Street</li>
				<li>Delphos, OH 45833</li>
			</ul>
		</div>
		<p>Include 'donation' in the memo.</p>
	</div><!-- rightCol -->
	<div class="clearFloat"></div>
</div><!-- eventsSummary -->
<?php include('include/footer.php'); ?>
