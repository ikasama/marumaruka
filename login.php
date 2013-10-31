<?php

//require_once 'config.php';

if (@$_SESSION['account_name']) {
    $account = $_SESSION['account_name'];
    header("Location: http://creative2015.lolipop.jp/hourensou/mypage.php");
    exit;
}


require_once 'twitteroauth/twitteroauth.php';

function auth_check() {
    if (($_SESSION['access_token'] && $_SESSION['access_token_secret'] && $_SESSION['account_name'])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

session_start();
define('CONSUMER_KEY', 'LWRXkkXrvbENiq6qkVQfw');
define('CONSUMER_SECRET', 'R2uOhD5QXbA6xjzCDFiH3EkO5HdVchsTDXd64LBpruY');


$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);

$request_token = $connection->getRequestToken("http://creative2015.lolipop.jp/hourensou/callback.php");
//var_dump($request_token);exit;
$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

$auth_url = $connection->getAuthorizeURL($request_token['oauth_token'], FALSE);
//var_dump($auth_url);exit;

//$fixed_url = "$auth_url" + "?oauth_token=" + "$_SESSION['oauth_token']";
//var_dump($fixed_url);exit;

//header ("Location: $fixed_url");
header ("Location: $auth_url");
