<?php
ob_start();
session_start();
session_destroy();
$cookie_name = 'loggeduser';
unset($_COOKIE[$cookie_name]);
// empty value and expiration one hour before
$res = setcookie($cookie_name, '', time() - 3600);
echo "successfuly logout";
header("Location: login.html"); 
ob_end_flush();
?>