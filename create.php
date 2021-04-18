 <!DOCTYPE html>
 <html>
	<head>
		<title>Add A member</title>
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
		<legend>Add a member</legend>
		<form action="Action_php/saving.php" method="post">
			<table cellpadding="0" cellspacing="0">
			<tr>
			<th>firstname</th>
			<td><input type="text" name="fname" size="15" placeholder="First name"/></td>
			</tr>
			<tr>
			<th>Lastname</th>
			<td><input type="text" name="lname" size="15" placeholder="Last name"/></td>
			</tr>
			<tr>
			<th>Contact</th>
			<td><input type="text" name="contact" size="15" placeholder="Contact"/></td>
			</tr>
			<tr>
			<th>Age</th></td>
			<td><input type="text" name="age" size="15" placeholder="Age"/></td>
			</tr>
			<tr>
			<td><button type="submit"> SaveChanges</button></td>
			<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
			
			</table>
		</form>
		</fieldset>
	</body>
 </html>
 