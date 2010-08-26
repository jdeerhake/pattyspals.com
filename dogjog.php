<?php header('Location: res.php'); ?>
<?php include('include/header.php'); ?>
<div id="twoCol">
	<div class="leftCol event">
		<h2>Pooches for Patty Dog Jog</h2>
		<h3 class="subTitle">July 3rd at Country Acres Golf Course, Kalida, Ohio</h3>
		<img src="images/dogjog.png" alt="dogjog" class="floatRight" />
		<p><a href="javascript:void(0)" id="topReg">Register now!</a></p>
		<p>GO DOG WILD!!</p>
		<p>Bring Rover out and join fellow dog lovers for a 1 mile fun run/walk to raise money for Patty!</p>
		<p>Food, Auction, Live Band, Lots of Activities all evening!</p>
		<dl>
			<dt>When &amp; Where</dt>
				<dd class="noSpace">Saturday, July 3  6pm start</dd>
				<dd><a href="http://www.countryacresgolfclub.com/golf/proto/countryacresgolfclub/">Country Acres Golf Course, Kalida</a></dd>
			<dt>Fees</dt>
 				<dd class="noSpace">No t-shirt: $5.00 per person with one pet (Race day registrations welcome)</dd>
				<dd>T-Shirt: $10.00 per person with one pet (order before June 23)</dd>
			<dt>Registration</dt>
				<dd>Dog Jog registration runs from 5pm to 6pm</dd>
			<dt>Requirements</dt>
				<dd class="noSpace">All dogs must be kept on leash at all times - 6 ft. limit</dd>
				<dd class="noSpace">Please pick up after your pet</dd>
				<dd class="noSpace">Current rabies vaccine required</dd>
				<dd class="noSpace">No female pet in heat, please</dd>
				<dd>You may run or walk your dog -- no carrying of dog (or owner:) while running</dd>
			<dt>Questions?</dt>
				<dd>Contact Larry Heiing: 419-302-9624 or <a href="mailto:ldheiing6@hotmail.com">ldheiing6@hotmail.com</a></dd>
			<dt id="entry">Entry Options</dt>
				<dd class="noSpace">Download an <a href="files/dogjog_reg.doc">entry form</a>, fill it out, and mail it with a check to: 
					<dl><dd>Patty’s Pals 5K, 501 E. Third St, Delphos, OH 45833</dd></dl>
				</dd>
				<dd>Or <a href="javascript:void(0)" id="showReg">click here</a> to fill out an entry form online</dd>
		</dl>
		<div class="formHolder withBorder hide">
			<form id="regForm" action="submit.php" method="post" class="transform">
			<div class="formRow">
				<h4>Patty's Day Dog Jog Entry form</h4>
			</div>
			<div class="formRow">
				<label for="yourName">Your Name</label>
				<input type="text" id="yourName" name="yourName" title="Your Name" />
			</div>
			<div class="formRow">
				<label for="address">Address</label>
				<input type="text" id="address" name="address" title="Address" />
			</div>
			<div class="formRow">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" title="Email" />
			</div>
			<div class="formRow">
				<label for="shirtSize">Shirt Size</label>
				<select id="shirtSize" name="shirtSize" title="Shirt Size" class="tottrot">
					<option value="No Shirt">No shirt</option>
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
					<option value="XXL">XXL</option>
					<option value="child-S">Child S</option>
					<option value="child-M">Child M</option>
					<option value="child-L">Child L</option>
				</select>
			</div>
			<div class="formRow">
				<table>
					<tr>
						<td colspan=2 class="pad noRelease">Please agree to the waiver</td>
					</tr>
					<tr>
						<td class="pad"><input type="checkbox" name="release" id="release" /></td>
						<td class="pad"><p>I hereby release &amp; discharge Country Acres Golf Course, St. Rita's Medical Center, Race Officials,Sponsors and Volunteers from any liability for injuries from participation in this event. I am fit for this event and my dog has current rabies vaccine.</p></td>
					</tr>
				</table>
			</div>
			<div class="formRow">
				<p id="amtShow">Amount owed: <span id="amt">$5</span></p>
				<input type="hidden" name="amt" id="amtStore" value="$5" />
				<input type="hidden" name="formName" value="dogjogreg" />
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
			<li><a href="golf.php">Puttin' Fore Patty Golf Scramble</a></li>
			<li><a href="tottrot.php">Playin' for Patty Tot Trot</a></li>
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
