 <?php
 require_once 'Action_php/db_connect.php';
	
	if($_GET['id']){
		$id= $_GET['id'];
		  
		$sql= "SELECT * FROM members WHERE id= '$id' ";
		$result =$connect->query($sql);
		$data=$result->fetch_assoc();
		
		$connect->close();
?>	

 <!DOCTYPE html>
 <html>
 <head>
 <title>Remove A member</title>
 
 </head>
	<body>
	<h3>do you really want to remove?</h3>
	<form action="Action_php/delete.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id']?>" />
		<button type="submit">Remove</button>
	    <a href="index.php"><button type="button">Cancel</button></a>
		
	</form>
	</body>
 </html>
<?php
	}
 ?>