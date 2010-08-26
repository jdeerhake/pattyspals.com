<?php include('include/header.php'); ?>
<div id="twoCol">
	<div class="leftCol">
		<h2>Patty's Day</h2>
		<p>Thanks to everyone who attended our Patty's Day benefit and contributed to the cause!  We had over 50 Dog Jog/Tot Trot walkers and 5K runners and 16 golf teams participated in the golf scramble. The silent auction and live auction were also successful with many autographed items bringing big bucks to help Patty.<p>
		<p>You can download the results from the 5k <a href="5kres.pdf">here</a>.</p>
		<p>Congratulations to our raffle winners:
		  <dl class="winnerList">
		    <dt>Big screen TV</dt>
		      <dd>Debbie Krendl, Delphos</dd>
        <dt>Yellow Tuesday's Spa Day</dt>
          <dd>Samantha Neinberg, Kalida</dd>
        <dt>Starbucks gift basket and $100 Gift card</dt>
          <dd>Cindy Fitzgerald, Kalida</dd>
        <dt>Grill</dt>
          <dd>Kathy  Radebaugh, Elida</dd>
        <dt>$100 Gas card</dt>
          <dd>Dennis Hoge, Wapakoneta</dd>
        <dt>Vera Bradley travel set</dt>
          <dd>Alice Saul, Findlay</dd>
      </dl>
    <p>Here are some pictures from the fun day at <a href="http://www.countryacresgolfclub.com/golf/proto/countryacresgolfclub/">Country Acres</a>:</p>
    <p>
      <?php
        $x = 1;
        while($x <= 53) {
          echo "<img src='images/pic" . $x . ".JPG' />\n";
          $x++;
        }
      ?>
    </p>
	</div><!-- leftCol -->
	<div class="rightCol">
		<h4>It's not too late!</h4>
    <p>You can still help Patty Pal's by donation!</p>
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
