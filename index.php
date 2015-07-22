<?php
/*
        Proudly coded by Muhammad Aliff Muazzam (Tester2009).
        <3 Katze xD
        From German-Malaysian Institute (GMI). Training for Advanced Technology.
        Start dev: July 23, 2015. Thursday

        https://www.facebook.com/Tester2009
        https://github.com/alepcat1710
        http://aliff.muazzam.my
        Feel free to use. Do not change copyright, mastah !

        No update available.
        Just put on your server then run !
*/
/*
The MIT License (MIT)

Copyright (c) [2015] [Muhammad Aliff Muazzam]

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
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
