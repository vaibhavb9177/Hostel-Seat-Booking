
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>USER LOGIN</title>
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
		#box
		{
			padding-top: 50px;

		}
		
		#loginbox
		{
			padding-top: 50px;
			height: 500px;
			width: 400px;
			margin-left: 500px;
			background-color: greenyellow;
			color: black;
			align: center;
		}
	</style>

</head>
<body>
	<div class="header">
  		<h1>ONLINE  HOSTEL  SEAT  ALLOTMENT</h1>
  
	</div>

<div class="topnav">
  <a href="html.php">Home</a>
  <a href="login.php">User</a>
    
  <a href="admlogin.php">Admin</a>
</div>
	<div id="box">
	<div id="loginbox">
		<form action="log.php" method="POST">
		<center><h1>USER LOGIN</h1><br>
		<p>USER NAME:</p>
		&nbsp&nbsp<input type="text" name="user" placeholder="enter user name">
		<p>PASSWORD:</p>
		&nbsp&nbsp<input type="password" name="pass" placeholder="enter password"><br><br><br>
		
		<p><input type="submit" value="LOGIN"  name="login"><br><br></p>
		<p>New User?<a href="register.php">Register here</a></p>

		</center>
		</form>
	</div>
	</div>
 
</body>
</html>



  			