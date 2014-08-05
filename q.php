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
$protocol=$_GET["txtweb-protocol"];
//echo "$y[0]"."<br>";

if($protocol=="1000" || $protocol=="1001" || $protocol=="3000" || $protocol=="3001")
{
echo "Here you go <br/><br/>Answer this question <br/>";
 $query="SELECT `mhash` FROM `a` WHERE mhash='$mhash'";
 $result=mysql_query($query);
    $n=mysql_num_rows($result);
	if($n>0){
	
	$query="SELECT MAX(`qid`) FROM `a` WHERE mhash='$mhash' ORDER BY id DESC LIMIT 1";
    $result=mysql_query($query);
	$a=mysql_result($result,0);
	
	$id1=$a+1;
	
		$query="SELECT * FROM `q` WHERE id='$id1'";
 
         $result=mysql_query($query);
          $n=mysql_num_rows($result);
if($n==0)
	{
		echo "No more questions to display comeback later";
	}
 for($i=0;$i<$n;$i++)
	{
		
	$row = mysql_fetch_array($result, MYSQL_NUM);
	
	
	
	echo "$row[0]".".".$r[$i]=$row[1]."<br/>";
	if(strlen($row[2])==0)
	{
		echo "No more questions to display comeback later";
	}
	echo "<a href='a.php?a=1&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[2]</a> "."<br/>";
	echo "<a href='a.php?a=2&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[3]</a> "."<br/>";
	echo "<a href='a.php?a=3&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[4]</a> "."<br/>";
	echo "<a href='a.php?a=4&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[5]</a> "."<br/>";
	}
 
	}
		else{
			
			
			$id1="1";
		$query="SELECT * FROM `q` WHERE id='$id1'";
 
 $result=mysql_query($query);
 $n=mysql_num_rows($result);

 for($i=0;$i<$n;$i++)
	{
		
	$row = mysql_fetch_array($result, MYSQL_NUM);
	
	
	echo "$row[0]".".".$r[$i]=$row[1]."<br/>";
	echo "<a href='a.php?a=1&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[2]</a> "."<br/>";
	echo "<a href='a.php?a=2&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[3]</a> "."<br/>";
	echo "<a href='a.php?a=3&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[4]</a> "."<br/>";
	echo "<a href='a.php?a=4&qid=$row[0]&mhash=$mhash&wa=$row[6]' class='txtweb-menu-for' >$row[5]</a> "."<br/>";
	
		
		}
	
		}
}
else{
echo "Welcome to Trivarc<br/>";
echo "Play FIFA Quiz and Earn Prizes<br/>";
echo "Please use your mobile device to answer questions";
	
}
   
?>