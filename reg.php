<?php
		include ('connection.php');
		//echo "hi..";
		 if(isset($_POST['s'])) 
	 {
	 	//echo "hello....";
		$n = $_POST['txtname'];
		$e = $_POST['email'];
		$u = $_POST['username'];
		$p = $_POST['password'];

		$query = mysql_query("INSERT INTO register VALUES ('', '$n', '$e', '$u', '$p')");
		if($query) 
		{
			
			header("Location:login.php");
			echo "Registration Successful...";
		}
		else
		{	
			echo "Registration failed......";
			//echo "die(mysql_error())";
			header("Location:register.php");
		}

	 }
	 //header("Location:register.php");
	 
  ?>