<pre>
<?php
echo "Importing articles...\n\n";
$message = "Importing articles...\n\n";
error_reporting(E_ALL);
include("dom.php");
$html = new simple_html_dom();
$html->load_file('http://www.caringbridge.org/visit/pattyrojas/journal');
$entries = $html->find("li.entry");
$file = fopen("news.php", 'w') or die("Error: Couldn't open file for writing.\n");
foreach(array($entries[0], $entries[1]) as $i) {
	$ex = new simple_html_dom();
	$ex->load($i->innertext);
	$date = $ex->find("p");
	$msg = $ex->find("div");
	fwrite($file, "<span class='item'>\n");
	fwrite($file, "\t<p class='newsArt'><a href='http://www.caringbridge.org/visit/pattyrojas/journal'>" . substr(trim(strip_tags($msg[0]->innertext)), 0, 100) . "...</a></p>\n");
	fwrite($file, "\t<span class='newsDate'>" . substr(trim(strip_tags($date[0]->innertext)), 0, -5) . "</span>\n");
	fwrite($file, "</span>\n\n");
	echo "Article imported.\n";
	$message .= "Article imported.\n";
}
fwrite($file, "<!-- " . date('m/d/y h:m:s') . " -->");
fclose($file);
echo "\nDone.\n";
$message .= "\n\nDone.\n";

$from = "form-submission@pattyspals.com";
$to[] = "jdeerhake@gmail.com";

$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";

$to = implode(",", $to);
$res = mail($to, "CaringBridge Screen Scrape", $message, $headers);

?>
</pre>