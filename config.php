<?php
require_once 'twitteroauth/twitteroauth.php';
session_start();

//var_dump($_SESSION);

define('CONSUMER_KEY', 'LWRXkkXrvbENiq6qkVQfw');
define('CONSUMER_SECRET', 'R2uOhD5QXbA6xjzCDFiH3EkO5HdVchsTDXd64LBpruY');

function auth_check() {
    if (($_SESSION['access_token'] && $_SESSION['access_token_secret'] && $_SESSION['account_name'])) {
        return TRUE;
    } else {
        return FALSE;
    }
}

if (auth_check() === TRUE) {
  $client = new TwitterOAuth(
    CONSUMER_KEY, CONSUMER_SECRET,
    $_SESSION['access_token'], $_SESSION['access_token_secret']
  );
}
/*
function connect()
{
    $pdo = new PDO(
        'mysql:host=localhost;dbname=marumaruka;charset=utf8',
        'root',
        'l48A1pEB',
        array(PDO::ATTR_EMULATE_PREPARES => false)
    );
    return $pdo;
}
*/