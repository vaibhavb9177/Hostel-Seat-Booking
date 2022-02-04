
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>
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
		#design
		{   
			padding-top: 50px;
			margin-left: 500px;
			height: 550px;
			width: 500px;
			background-color: lightskyblue;			
			
			font: italic;

		}
		 #btn
       {
          width: 150px;
          height: 40px;
          background-color: red;
          font-size: 20px;


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
		
		<div id="design">
		<center>
		<h1><p>REGISTER HERE</p></h1>	
		<form action="reg.php" method="POST">
		
		
		<p>FULL NAME</p> 
		<input type="text" name="txtname" placeholder="enter name">
		<p>E-mail</p> 
		<input type="text" name="email" placeholder="enter email">
		
		<p>Username</p>
		<input type="text" name="username" placeholder="enter user name">
		<p>Password</p>
		<input type="Password" name="password" placeholder="enter password">

		<br><br>
		
		<input type="submit" name="s" value="Register" id="btn">
		<p>Have an Account?<a href="login.php?page=login">Login Here</a></p>
		</center>
		</div>
	</div>       
</form>
</body>
</html>

