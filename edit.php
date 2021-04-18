<?php
require_once 'Action_php/db_connect.php';
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$sql = "SELECT *FROM members WHERE id = '$id' ";
		$result= $connect->query($sql);
		
		$data = $result->fetch_assoc();
		
		$connect->close();
	
		
?>



 <html>
 <head>
	<title>Edit Page</title>
	<style>
			fieldset{
				margin:auto;
				width:50%;
				margin-top:100px;
			}
			table th{
				padding-top:20px;
			}
			
		</style>
 </head>
 <body bgcolor="LightSkyBlue"> 
	<fieldset>
		<legend>Edit Informations</legend>
		<form action="Action_php/update.php" method="post">
			<table cellpadding="0" cellspacing="0">
			<tr>
			<th>firstname</th>
			<td><input type="text" name="fname" size="15" placeholder="First name" value=" <?php echo $data['fname'] ?>"  /></td>
			</tr>
			<tr>
			<th>Lastname</th>
			<td><input type="text" name="lname" size="15" placeholder="Last name" value=" <?php echo $data['lname'] ?>" /></td>
			</tr>
			<tr>
			<th>Age</th>
			<td><input type="text" name="age" size="15" placeholder="Age" value=" <?php echo $data['age'] ?>" /></td>
			<tr>
			<tr>
			<th>Contact</th>
			<td><input type="text" name="contact" size="15" placeholder="Contact" value=" <?php echo $data['contact'] ?>" /></td>
			</tr>
			<tr>
			<td><input type="hidden" name="id" size="15" placeholder="ID" value="<?php echo $data['id'] ?>" /></td>
			<td><button type="submit"> Update</button></td>
			<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
			
			</table>
		</form>
	</fieldset>
 </body>
 </html>

<?php
}
?>


