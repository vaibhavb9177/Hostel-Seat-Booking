
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
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
	
		#b{
			padding-top: 20px;
		}
		#body{
			padding-top: 0px;
			height: 650px;
			width: 500px;
			background-color: darksalmon;

		}
		#btn{
			height: 20px;
			width: 100px;
			background-color: darkcyan;
			font-size: 10px;

		}
		
	</style>
</head>
<body>
		<div class="header">
  		<h1>ONLINE  HOSTEL  SEAT  ALLOTMENT</h1>
  
	</div>

<div class="topnav">
  <a href="html.php">Home</a>
  <a href="display.php">Allotments</a>
  <a href="login.php">User</a>
    
  <a href="admlogin.php">Admin</a>
</div>
	<center>
	<div id="b">
		<div id="body">
			<h2><p>REGISTRATION FORM</p></h2>
			<form action="up.php" method="POST">
		<table cellpadding="1" cellspacing="1">
			<tr><td><p>ID -:
			<input type="text" name="id" ></p></td></tr>


		<tr><td><p>FULL NAME -:
			<input type="text" name="name" placeholder="enter name"></p></td></tr>

		<tr><td><p>ADDRESS -:
			<input type="text" name="address" placeholder="enter address"></p></td></tr> 
		
		<tr><td><p>MOBILE NO -:
			<input type="text" name="mobile" placeholder="enter mobile number"></p></td></tr>

		<tr><td><p>COLLEGE -:
			<input type="text" name="college" placeholder="enter college name"></p></td></tr>

		<tr><td><p>COURSE -:
			<input type="text" name="course" placeholder="enter course"></p></td></tr>

		<tr><td><p>PRN NO -:
			<input type="text" name="prn" placeholder="enter prn number"></p></td></tr>

		<tr><td><p>FEE RECEIPT NO -:
			<input type="text" name="receipt" placeholder="enter receipt number"></p></td></tr>

			<tr><td><p>HOSTEL WING -:
			<select name="wing" id="wing">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="C">C</option>
				<option value="D">D</option>
			</select></p></td></tr>

			<tr><td><p>ROOM NO -:
			<input type="text" name="room" placeholder="enter room number"></p></td></tr>

		</table>
		<input type="submit" name="submit" value="SAVE" id="btn">
		<a href="html.php">Logout</a>

		</div>

	</div>
	</center>
	</form>
</body>
</html>
