<?php
$server="localhost";
$user="root";
$password="";
$db="crud_db";
$connexion = new mysqli($server, $user, $password, $db);
if($connexion -> connect_error){
	die("Failed to connect:".$connexion->connect_error);
}else{
	echo"Woow,It's connected!";
}

?>