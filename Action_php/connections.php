<?php

$server="";
$user="";
$pass="";
$db_name="";

$conn=new mysqli($server,$user,$pass,$db_name);

if($conn->connect_error){
	die("failed".$conn->connect_error);
}else{
	echo("connected!");
}
?>
