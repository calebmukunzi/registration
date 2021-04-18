 <?php
 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="crude";
 
 $connect= new mysqli($servername, $username, $password, $dbname);
 if($connect->connect_error){
	 die("connection Failed:".$connect->connect_error);
 }else{
	// echo"Successfully Connected!";
 }
 
 ?>
 