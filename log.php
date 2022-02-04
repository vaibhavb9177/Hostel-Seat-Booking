<?php
	session_start();
	include ('connection.php');
	
	if (isset($_POST['login']))
	 {
		$u=$_POST['user'];
		$p=$_POST['pass'];
		$q=mysql_query("select * from register");
		//$r=mysql_num_rows($q);
		//echo $r;
		//echo "hello";
		while ($row=mysql_fetch_array($q)) 
		{
			if (($row['username']==$u) && ($row['password']==$p))
			{
			 	$_SESSION['n']=$u;
				header("Location:fillform.php");
				echo "login successful...";
			}
			else
			{
				//header("Location:login.php");
				echo "login failed...";
			}
		}

	 }

  ?>