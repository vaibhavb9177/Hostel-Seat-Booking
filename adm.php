<?php 
	session_start();
	include ('connection.php');

	if(isset($_POST['login']))
	{
		
		$u=$_POST['user'];
		$p=$_POST['pass'];
		$q=mysql_query("select * from admin");
		
		while($row=mysql_fetch_array($q))	
		 {
			if(($row['name']==$u) && ($row['password']==$p)) 
			{
				$_SESSION['n']=$u;
				header("Location:fetch.php");
				//echo "login successfully";
			}
			else
			{
				echo "login fail..";
				header("Location:html.php");
			}
		}
		
	}
 ?>