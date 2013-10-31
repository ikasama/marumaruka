<?php

//ini_set( "display_errors", "Off");
require_once 'twitteroauth/twitteroauth.php';
session_start();
/*
function connect()
{
    $pdo = new PDO(
        'mysql:host=49.212.200.153;dbname=marumaruka;charset=utf8',
        'ca_lolipop',
        '5K13zIDe',
        array(PDO::ATTR_EMULATE_PREPARES => false)
    );
    return $pdo;
}
*/
//var_dump($_SESSION);

if ($_SESSION['oauth_token'] /*&& $_SESSION['account'] === NULL*/) {
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
	$token = $connection->getAccessToken($_GET['oauth_verifier']);
	/*echo "<pre>";
	var_dump($token);
	echo "</pre>";*/
	$_SESSION['access_token'] = $token['oauth_token'];
	$_SESSION['access_token_secret'] = $token['oauth_token_secret'];

	$twitter_id = $token['user_id'];
	$account_name = $token['screen_name'];
	$_SESSION['account_name'] = $token['screen_name'];
	$_SESSION['twitter_id'] = $token['user_id'];
	/*
        echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
        */

        /*
	$db = connect();
	$sql = "select * from `users` where `twitter_id` = ?";
	$sth = $db->prepare($sql);
	$sth->execute(array($twitter_id));
	$res = $sth->fetchAll();

	if (!$res) {
		$now = date('Y-m-d H:i:s');
		$sql2 = "insert into `users` (twitter_id, account_name, rank, created, modified) values (:twitter_id, :account_name, 1, :created, :modified)";
		$sth2 = $db->prepare($sql2);
		$sth2->bindParam(':twitter_id', $_SESSION['twitter_id']);
        $sth2->bindParam(':account_name', $_SESSION['account_name']);
        $sth2->bindParam(':created', $now);
        $sth2->bindParam(':modified', $now);
        $ret = $sth2->execute();
	}

	*/
	header ("Location: http://creative2015.lolipop.jp/hourensou/index.php");
}
