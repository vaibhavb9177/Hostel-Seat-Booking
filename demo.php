

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<form action="demo.php" method="POST"></form>
		<label>FULL NAME</label>
		<input type="text" name="txtname" placeholder="enter name">
		<label>Email</label>
		<input type="text" name="email" placeholder="enter email">
		
		<label>USERNAME</label>
		<input type="text" name="username" placeholder="enter user name">
		<label>PAssword</label>
		<input type="Password" name="password" placeholder="enter password">

		<br><br>
		
		<input type="submit" name="submit" value="register">

</body>
</html>
<?php 
	
	include ('connection.php');
	if(isset($_POST['submit'])) 
	{
			echo "hello";
		// code...
	}
	else{
		echo "hiii";
	}

 ?>