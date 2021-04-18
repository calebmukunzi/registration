 <?php
  require_once 'db_connect.php';
  
  if($_POST){
	  $Fname= $_POST['fname'];
	   $Lname= $_POST['lname']; 
		 $Contact= $_POST['contact'];
		  $Age= $_POST['age'];
		 
		 $sql ="INSERT INTO members (fname, lname,contact, age, active)
		 VALUES('$Fname' , '$Lname', '$Contact','$Age', 1)";
		 
		 if($connect->query($sql)=== TRUE){
			 echo"<p>+++++One record Created!+++++</p>";
			 header("refresh:0;url=http://localhost/crud/index.php");
		 }else{
			 echo"Refused to save".$connect->connect_error;
		 }
		 $connect->close();
  }
 
 ?>