<?php
	include ('connection.php');

	$id= isset($_GET['id']) ? $_GET['id'] : '';
	//$i=$_POST['id'];

	$delete = mysql_query("delete from form where id= 1");

	if($delete)
	{
		echo "successful";
		header("Location:fetch.php");
	}
	else
	{
		echo "unsuccessful";
	}

 ?>