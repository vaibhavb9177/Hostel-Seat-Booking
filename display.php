<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
	<!DOCTYPE html>
<html>
<head>
<title>HOSTEL SEAT BOOKING</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  height: 70px;
  background-color: #f1f1f1;
  padding: 2px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
  padding-top: 5px;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

		body
		{
			box-sizing: border-box;
			margin: 0;
			background-color: lightcyan;
		}
	</style>
</head>
<body>
	<form action="html.php" method="POST"></form>

<div class="header">
  <h1>ONLINE  HOSTEL  SEAT  BOOKING</h1>
  
</div>

<div class="topnav">
  <a href="html.php">Home</a>
  <a href="display.php">Allotments</a>
  <a href="login.php">User</a>  
  <a href="admlogin.php">Admin</a>
</div>
	<center>
	<div class="body">
		<form action="fetch.php"></form>
	<table border="2" cellpadding="5" cellspacing="5">
		<thead>
			<th>id</th>
			<th>name</th>
			<th>college</th>
			<th>course</th>
			<th>wing</th>
			<th>room</th>
			

		</thead>
		<tbody>
			<?php 
					include ('connection.php');
					//$i=$_GET['id'];
					$query=mysql_query("select * from form");

					while ($result=mysql_fetch_assoc($query)) 
				{
			?>
			<tr>
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['college']; ?></td>
				<td><?php echo $result['course']; ?></td>
				<td><?php echo $result['wing']; ?></td>
				<td><?php echo $result['room']; ?></td>

				
			</tr>
			<?php 		
					}
	
 			?>
			
		</tbody>
	</table>
</div>
</center>
</body>
</html>


