<?php
 //to check connection
require_once 'Action_php/db_connect.php';
 
 ?>
 <!DOCTYPE html>
 <html>
	<head>
		<title>Php crud</title>
		<style type="text/css">
		.ManageMember{
			width: 50%;
			margin: auto;
		}
		table{
			width: 100%;
			margin-top: 20px;
		}
		fieldset{
			margin-top:100px;
		}
		
		</style>
	</head>
	<body bgcolor="LightSkyBlue">
	<div class="ManageMember">
		
		<fieldset>
	<legend>Members</legend>
	<a href="create.php"><button type="button"> Add Member</button></a>
			<table border="1" cellspacing="0" cellpadding="0">
				<thead>
				<tr> 
					  	<th>Names</th>
						<th>Age</th>
						<th>Contact</th>
						<th>option</th>
				<tr>
				</thead>
				<tbody>
				<?php
					$sql="SELECT *FROM members WHERE active=1";
					$result=$connect->query($sql);
					if($result->num_rows>0){
						while($row = $result->fetch_assoc()){
							echo"
								<tr>
						        <td>".$row['fname']."  ".$row['lname']."</td>
								<td>".$row['age']."</td>
								<td>".$row['contact']."</td>
								<td>
								<a href='edit.php?id=".$row['id']."><button type='button'>Edit</button></a>
								<a href='remove.php?id=".$row['id']."><button type='button'>Remove</button></a>
								 </td>
								</tr>
							";
						}
					}	else{
						 echo"<tr>
							<td colspan='5'><center>no data Available</center></td>
							</tr>";
					}
				?>
				</tbody>
				
			</table>
	</fieldset>
	</div>
		
	</body>
	
 </html>