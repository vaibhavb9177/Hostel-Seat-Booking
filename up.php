<?php 
	include ('connection.php');
	//$i= $_GET['id'];
	$id= isset($_GET['id']) ? $_GET['id'] : '';

	if (isset($_POST['submit']))
	 {
	 	$i=$_POST['id'];
	 	$n=$_POST['name'];
	 	$a=$_POST['address'];
	 	$m=$_POST['mobile'];
	 	$cl=$_POST['college'];
	 	$c=$_POST['course'];
	 	$p=$_POST['prn'];
	 	$r=$_POST['receipt'];
	 	$w=$_POST['wing'];
	 	$rm=$_POST['room'];

	 	$query= mysql_query("UPDATE form SET name= '$n',
	 	 address= '$a', mobile= '$m', college= '$cl', course= '$c', 
	 	 prn= '$p', receipt_no= '$r', wing= '$w', room= '$rm' WHERE id= $i ");


	 	 if($query)
	  {
	  	echo "record updated";
	  	header("Location:fetch.php");
	  }
	  else
	  {
	  	echo "not updated";
	  }

	 } 
 ?>