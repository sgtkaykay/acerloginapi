<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id'      => '191008252198022',
    'app_secret'     => 'ef139f6ed10d749ab1f3462cbefc9ae2',
		'default_graph_version' => 'v2.10'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
