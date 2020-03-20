<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id'      => '850866198747499',
    'app_secret'     => '7f50b9082aeaedcad11f15e6551f75d4',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
