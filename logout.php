<?php
session_start();

if ($_SESSION['account_name']) {
    session_destroy();
    header('Location: http://creative2015.lolipop.jp/hourensou/index.php');
    exit;
} else {
    header('Location: http://creative2015.lolipop.jp/hourensou/index.php');
    exit;
}
