<?php

$servername="localhost";
$username="root";
$password="";
$db_name="crud_db";

$connect = new mysqli($servername,$username,$password,$db_name);
if($connect->connect_error){
	
}
?>