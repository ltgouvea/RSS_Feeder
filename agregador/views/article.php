<?php
 
$siteName = $_GET['siteName'];
$origLink = $_GET['origLink'];
 
// Consulta YQL (SELECT * from feed ... )
// Strings separadas pra legibilizar o código

$path = "http://query.yahooapis.com/v1/public/yql?q=";
$path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName' AND 		guid='$origLink'");
$path .= "&format=json";
 
$feed = json_decode(file_get_contents($path));
$feed = $feed->query->results->item;
 
include('views/article.tmpl.php');
