<?php
require_once("config.php");
?>
<html>
<head>
<meta name="txtweb-appkey" content=""/>
</head>
<body>
<?php

//$mhash=$_GET['mhash'];

$msg=$_GET["txtweb-message"];

$mhash=$_GET["txtweb-mobile"];
 $mhash1=$_GET["mhash"];
 $a=$_GET["a"];
 $a="$a";
 $qid=$_GET["qid"];
 $wa=$_GET["wa"];

if($a==$wa)
{
	$p="1";
	echo "Thank you for the spectacular attempt on the Goal.it seems your'e expert in football Be prepared ..<br/>";
}
else{
	$p="0";
	echo "Thank you for the spectacular attempt on the Goal.Unfortunately your goal is missed <br/>";
}
date_default_timezone_set('asia/kolkata');
$date = date('h.i', strtotime(str_replace('/', '-', $date)));
 $date."<br/>";
$query="INSERT INTO `a` ( `qid` , `a` , `p` , `mhash` , `time` ) \n"
    . "VALUES ( $qid, $a, $p, \"$mhash1\", $date )";


	mysql_query($query) or die(mysql_error());
	
	
	
	echo "<a href='q.php' class='txtweb-menu-for' > Next Qustion</a> "."<br/>";
	
	


?>