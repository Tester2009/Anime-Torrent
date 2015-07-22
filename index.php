<?php
error_reporting(0);
if (!$_POST['submit'])
{
    echo "<form action='index.php' method='post'><input type='text' name='submit'></input><br /><input type='submit' value='Submit'></form>";
}
else
{
echo "<title>{$_POST['submit']}</title>";
echo "<form action='index.php' method='post'><input type='text' name='submit'></input><br /><input type='submit' value='Submit'></form>";


$classname_title = "release_title";
$classname_episode = "release_episode";
$classname_filesize = "release_size release_last";
$classname_subber = "release_subber";
$title = $_POST['submit'];
$subber = "";

$url = "https://www.shanaproject.com/search/?title=".$title."&subber=".$subber;
$fetch = file_get_contents($url);
$dom = new DOMDocument;
$dom->loadHTML($fetch);
$items = $dom->getElementsByTagName('a');

for ($i = 1; $i < 51; $i++) {
$xpath = new DOMXPath($dom);
$results = $xpath->query("//*[@class='" . $classname_episode . "']");
if ($results->length > 0) {
    echo "Episode: " .$review = $results->item($i)->nodeValue."<br />";
}

$xpath = new DOMXPath($dom);
$results = $xpath->query("//*[@class='" . $classname_title . "']");
if ($results->length > 0) {
    echo "Title: " .$review = $results->item($i)->nodeValue."<br />";
}

$xpath = new DOMXPath($dom);
$results = $xpath->query("//*[@class='" . $classname_filesize . "']");
if ($results->length > 0) {
    echo "File size: " .$review = $results->item($i)->nodeValue."<br />";
}

$xpath = new DOMXPath($dom);
$results = $xpath->query("//*[@class='" . $classname_subber . "']");
if ($results->length > 0) {
    echo "Subber: " .$review = $results->item($i)->nodeValue."<br />";
}

$xpath = new DOMXPath($dom);
$results = $xpath->query("//a[@downbload='']");
if ($results->length > 0) {
$c = $i-1;
echo "URL: <a href='https://www.shanaproject.com" .$results->item($c)->getAttribute("href")."'>Download</a><br /><br />";
}
}
}
?>
