<?php

	require_once dirname(__FILE__) . '/twitter.class.php';

	$twitter = new Twitter("O1wo9xd7WvKeAtgFuCgYQ", "m3xpm0duhXbz2AS6pLsAz3daBstGHJrrjCI2EMUvV5k", "65845943-3ntiYmQHrjRDP5VPMrABR2MFdqswEcSYuMNg1v57F", "ceoSunEyT1a52pF1C32FnoSGvgipfXAih9ogbS1ec");
	
	$results = $twitter->search('from:compfest');
	
	echo json_encode($results);

?>