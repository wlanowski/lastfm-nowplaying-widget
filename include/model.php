<?php

date_default_timezone_set('Europe/Berlin');
$autorefresh = isset($_GET["autorefresh"]) && ($_GET["autorefresh"] == "no") ? false : true;

$api_key = "YOUR_API_KEY_HERE";

// parse options
$username = isset($_GET["username"]) ? $_GET["username"] : "wlanowski";


// headers
header('X-Frame-Options: GOFORIT'); 
header('Content-Type: text/html; charset=utf-8');

include __DIR__ . "/class.lastfm-nowplaying.php";

try {
	$np = new lastfm_nowplaying($api_key);
	$track = $np->info($username);
} catch (exception $e) {
	printf("error %s", $e);
}

?>
