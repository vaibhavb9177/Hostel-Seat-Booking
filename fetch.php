<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
		.body
		{
			margin: 0;
			background-color: lightcyan;
		}
	</style>
</head>
<body>
	<center>
	<div class="body">
		<form action="fetch.php"></form>
	<table border="2" cellpadding="5" cellspacing="5">
		<thead>
			<th>id</th>
			<th>name</th>
			<th>address</th>
			<th>mobile</th>
			<th>college</th>
			<th>course</th>
			<th>prn</th>
			<th>receipt</th>
			<th>wing</th>
			<th>room</th>
			<th colspan="2">operations</th>

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
				<td><?php echo $result['address']; ?></td>
				<td><?php echo $result['mobile']; ?></td>
				<td><?php echo $result['college']; ?></td>
				<td><?php echo $result['course']; ?></td>
				<td><?php echo $result['prn']; ?></td>
				<td><?php echo $result['receipt_no']; ?></td>
				<td><?php echo $result['wing']; ?></td>
				<td><?php echo $result['room']; ?></td>

				<td><a href="update.php?id=<?php echo $result['id']; ?>"><button>update</button></a></td>
				<td><a href="delete.php"><button>delete</button></a></td>
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


