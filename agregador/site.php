<?php

$siteName = empty($_GET['siteName']) ? 'estadao' : $_GET['siteName'];

$siteList = array(
		'estadao',
		'folha',
		'g1',
		'terra',
		'uol'
	);
	

	if (in_array($siteName, $siteList)) 
	{
		$path = "http://query.yahooapis.com/v1/public/yql?q=";
		$path .= urlencode("SELECT * FROM feed WHERE url='http://feeds.feedburner.com/$siteName'");
		$path .= "&format=json";

		$feed = file_get_contents($path, true);

		$cache = dirname(__FILE__) ."/cache/$siteName";
		//Recarrega o cache em 3 horas
		if( filemtime($cache) < (time() - 10800) ) {
 		}

		if ( is_object($feed) && $feed->query->count ) {

   			$cachefile = fopen($cache, 'w');
   			fwrite($cachefile, $feed);
   			fclose($cachefile);
}

		
	

		$feed = json_decode($feed);

		include_once 'views/site.tmpl.php';
	}


?>