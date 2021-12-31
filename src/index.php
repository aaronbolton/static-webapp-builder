<?php
/**
* Show user information like IP address, useragent
**/
$ip = $_SERVER['REMOTE_ADDR'];
$ip_server = $_SERVER['SERVER_ADDR']; 
$browser = $_SERVER['HTTP_USER_AGENT'];
$referrer = $_SERVER['HTTP_REFERER'];
 if ($referred == "") {
  $referrer = "This page was accessed directly";
  }
echo "<b>Visitor IP address:</b><br/>" . $ip . "<br/>";
echo "<b>Browser (User Agent) Info:</b><br/>" . $browser . "<br/>";
#echo "<b>Referrer:</b><br/>" . $referrer . "<br/>";
echo "<b>Server IP  address:</b><br/>" . $ip_server . "<br/>";
?>
