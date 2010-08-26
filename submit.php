<?php
header("Expires: Sun, 19 Nov 1978 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
$emessage = $_POST;
//print_r($_POST);
switch($_POST['formName']) {
	case "5kreg":
		$subject = "PattysPals.com 5k Entry Form";
		$to[] = "ldheiing6@hotmail.com";
		$success = "
		<p>Thanks for entering!</p>
		<p>To complete your registration, please send a check for " . $_POST['amt'] . " to:
			<dl><dd>Patty’s Pals 5K, 501 E. Third St, Delphos, OH 45833</dd></dl>
		</p>
		<p>Make check payable to \"Patty's Pals 5k\"</p>
		<p>Please include '5k - " . $_POST['yourName'] .  "' in the check memo.</p>";
		if($_POST['age'] < 18)
			$success .= "<p>Please note that because you are under 18, you need parental permission (a signed <a href='files/5k_reg.doc'>entry form</a>) to participate.</p>";
		$message .="5k entry form from PattysPals.com\n";
	break;
	case "golfreg":
		$subject = "PattysPals.com Golf scramble Entry Form";
		$to[] = "ldheiing6@hotmail.com";
		$success = "
		<p>Thanks for entering!</p>
		<p>To complete your registration, please send a check for " . $_POST['amt'] . " to:
			<dl><dd>Patty’s Pals, 501 E. Third St, Delphos, OH 45833</dd></dl>
		</p>
		<p>Make check payable to \"Patty's Pals \"</p>
		<p>Please include 'Golf Scramble - " . $_POST['yourName'] .  "' in the check memo.</p>";
		$success .= "<p>Please note that anyone under age 18 will need parental permission (a signed <a href='files/golf_reg.doc'>entry form</a>) to participate.</p>";
		$message .="Golf scramble entry form from PattysPals.com\n";
	break;
	case "tottrotreg":
		$subject = "PattysPals.com Tot Trot Entry Form";
		$to[] = "ldheiing6@hotmail.com";
		$success = "
		<p>Thanks for entering!</p>
		<p>To complete your registration, please send a check for " . $_POST['amt'] . " to:
			<dl><dd>Patty’s Pals, 501 E. Third St, Delphos, OH 45833</dd></dl>
		</p>
		<p>Make check payable to \"Patty's Pals \"</p>
		<p>Please include 'Tot Trot - " . $_POST['yourName'] .  "' in the check memo.</p>";
		$success .= "<p>Please note that anyone under age 18 will need parental permission (a signed <a href='files/tottrot_reg.doc'>entry form</a>) to participate.</p>";
		$message .="Tot trot entry form from PattysPals.com\n";
	break;
	case "dogjogreg":
		$subject = "PattysPals.com Dog Jog Entry Form";
		$to[] = "ldheiing6@hotmail.com";
		$success = "
		<p>Thanks for entering!</p>
		<p>To complete your registration, please send a check for " . $_POST['amt'] . " to:
			<dl><dd>Patty’s Pals, 501 E. Third St, Delphos, OH 45833</dd></dl>
		</p>
		<p>Make check payable to \"Patty's Pals \"</p>
		<p>Please include 'Dog Jog - " . $_POST['yourName'] .  "' in the check memo.</p>";
		$success .= "<p>Please note that anyone under age 18 will need parental permission (a signed <a href='files/dogjog_reg.doc'>entry form</a>) to participate.</p>";
		$message .="Dog jog entry form from PattysPals.com\n";
	break;
	case "contactForm":
		$subject = "PattysPals.com Contact Form Submission";
		$to[] = "adeerhake@gmail.com";
		$success = "<p>Thanks for contacting PattysPals.  We will get back to you soon.</p>";
	break;
	default:
		$error = 1;
	break;
}
unset($_POST['formName']);

$message .= "Submitted: " . date('m/d/y h:m:s') . "\n\n";
$translate = array(
	"yourName" => "Name",
	"contactType" => "Preferred contact method",
	"contactValue" => "Phone/Email/Address",
	"message" => "Message",
	"amt" => "Calculated amount owed",
	"shirtSize" => "Shirt preference",
	"address" => "Address",
	"email" => "Email Address",
	"release" => "Waiver"
);
foreach($_POST as $index => $key) {
	if($translate[$index])
		$val = $translate[$index];
	else
		$val = $index;
	$message .= "$val:\t$key\n";
}

$from = "form-submission@pattyspals.com";
$to[] = "jdeerhake@gmail.com";

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";


$to = implode(",", $to);

if($error)
	$res = 0;
else
	$res = mail($to, $subject, $message, $headers);

if (!$res) {
	echo 'Error submitting form, please try again later<br /><br />';
	echo "<pre>";
	print_r($emessage);
	echo "</pre>";
} else {
	sleep(2);
	echo "<!--" . $message . "-->";
	echo "<div style='padding: 20px'>" . $success . "</div>";
} ?>
