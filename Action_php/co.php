<?php 
$servername="localhost";
$username="root";
$password=" ";
$databasename="course";

$connectio_String=($servername,$username, $password,$databasename);
if($connectio_String->connect_error){
	die("connectio failed".$connectio_String->connect_error);
}else{
	echo("Connected");
}
?>