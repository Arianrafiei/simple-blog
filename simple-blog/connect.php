<?php
ob_start();
session_start();

$dbhost 	= "localhost";
$dbuser 	= "mahdisoa_bloguni";
$dbpass 	= "66kv78zK54BnpSwDcdhk";
$dbname 	= "mahdisoa_bloguni";
$charset 	= "utf8";

$dbcon = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$dbcon) {
    die("Connection failed" . mysqli_connect_error());
}
mysqli_select_db($dbcon,$dbname);
mysqli_set_charset($dbcon,$charset);
