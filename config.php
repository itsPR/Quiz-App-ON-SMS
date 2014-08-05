<?php

$username = "";
$password ="";
$hostname = "";
$db = "";

mysql_connect($hostname,$username,$password) or die(mysql_error());
$database = mysql_select_db($db) or die(mysql_error());
?>