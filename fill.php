<?php 
	include ('connection.php');

	if (isset($_POST['submit'])) 
	{
		$n=$_POST['txtname'];
		$a=$_POST['address'];
		$m=$_POST['mobile'];
		$cl=$_POST['college'];
		$c=$_POST['course'];
		$p=$_POST['prn'];
		$r=$_POST['receipt'];
		$w=$_POST['wing'];
		$rm=$_POST['room'];


		$q=mysql_query("insert into form values(' ', '$n', '$a', '$m', '$cl', '$c', '$p', '$r', '$w', '$rm')");
		if ($q)
		 {
			echo "inserted";
			header("Location:fillform.php");
		}
		else
		{
			echo "failed";
		}
	}

 ?>