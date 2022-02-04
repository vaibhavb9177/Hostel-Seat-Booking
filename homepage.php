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

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>
  <form action="html.php" method="POST"></form>

<div class="header">
  <h1>ONLINE  HOSTEL  SEAT  ALLOTMENT</h1>
  
</div>

<div class="topnav">
  <a href="html.php">Home</a>
  <a href="display.php">Allotments</a>
  <a href="login.php">User</a>  
  <a href="admlogin.php">Admin</a>
</div>

<div class="row">
  <div class="column">
    <h2>Hostel Information</h2>
    <p>Shivaji University boasts of three fully furnished and spacious boys’ hostels on its campus. As shown in the table, the Hostels are constructed at different times. The earliest constructed Hostelis the Boys’ Hostel No. 1.and Later on, with the emerging requirements two more hostels are constructed. The basic purpose behind the establishment of the Boys’ Hostels is to accommodate the needystudents who admitted in various course offered by the University. Since the University is the mentor of the students in their transformation, the University has to look after the facilities the students get on the campus. Another important fact related to the stay of the students in Kolhapur is that many a times the students are from poor and socio-economically backward classes.<br><br><br>
    *Facilities Provided to the Admitted Students<br><br>

1.Lodging - Boarding<br>
2.Medical Facilities<br>
3.Recreation<br>
4.Sports<br>
5.Gymnasium<br>
6.Library<br>
7.Purified Drinking Water<br>
8.Hot-water for bathing (Solar-system)<br>
9.Power generator</p>
  </div>
  
  
  <div class="column">
    <h2>MAP</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d238.87045418425052!2d74.2495181!3d16.6805227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10027ab4d9cdf%3A0x6fada84131c9e616!2sChhatrapati%20Shivaji%20Maharaj%20University%20Boy&#39;s%20Hostel!5e0!3m2!1sen!2sin!4v1625983725451!5m2!1sen!2sin" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
  </div>
</div>

</body>
</html>
