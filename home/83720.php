<?php
session_start();
 
$dbhost = "localhost";
$dbname = "ums"; 
$dbuser = "root";
$dbpass = "usbw";
 
mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());
mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());
?>