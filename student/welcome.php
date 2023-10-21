<?php
 include('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<title>Saint Francis College Guihulngan</title>
</head>
<body>
<header>
	<nav>
	<h6>School Management System J.J.V.F.F Version 0.0.1 SFCG</h6>
	</nav>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div id="mySidenav" class="sidenav">
<img src="SFC-G.png">
<h6 style="font-size: 20px;color:black;background:white;border-radius:15px;padding-left:1%;padding-right:1%;border:2px solid aqua;width:130px;margin-left:auto;margin-right:auto">Hello! <?php echo $firstname1; ?></h6>
<h6 style="font-size: 20px;color:black;background:white;border-radius:15px;padding-left:1%;padding-right:1%;border:2px solid aqua;margin-top:-40px;;width:130px;margin-left:auto;margin-right:auto"><?php echo $_SESSION['idnumber']; ?></h6>
  <a href="javascript:void(0)" class="closebtn" style="color:black; font-size: 60px" onclick="closeNav()">&times;</a>
  <table class="table">
	<tr>
		<td>
  <a href="welcome.php">Personal Information </a></td>
</tr>
<tr>
			<td><a href="">Attendance</a></td></tr>
		<tr>	<td><a href="">Grades</a></td></tr>
			<tr><td><a href="">Schedule</a></td></tr>
		<tr><td>	<a href="">Transactions</a></td></tr>
			<tr><td><a href="">Enrollment</a></td></tr>
			<tr><td><a href="">Curriculum</a></td></tr>
			<tr><td><a href="">Help</a></td></tr>
			<tr><td><a href="\Our Project Capstone 1/student/login.php">Log Out</a></td></tr>
</table>
</div>
    <nav class="taas">
<span style="font-size:30px;cursor:pointer;color:white;border:2px solid black;background:#964B00; border-radius:5px" onclick="openNav()">&#9776;</span>
</nav>
<div class="cards">
  <h1 class="ctext">Profile</h1>
  </div>
<div class="card"> 
  <img  src="ken.png" width="200px" height="50px" />       
         </div> 
         <div class="container">
		<div class="display-date">
		<span id="month">month</span>
		<span id="daynum">00</span>,
		<span id="year">0000</span>
		(<span id="day">day</span>)
		</div>
		<div class="display-time"></div>
</div>
<div class="user">
  <label>Lastname</label>
  <br>
  <input value="Balutan" disabled />
  <br>
  <br>
  <label>Firstname</label>
  <br>
  <input value="John Kenneth" disabled />
  <br>
  <br>
  <label>Middlename</label>
  <br>
  <input value="Oana" disabled />
</div>
<div class="user2">
<label>ID Number</label>
  <br>
  <input value="2021-0459" disabled />
  <br>
  <br>
  <label>Birthdate</label>
  <br>
  <input value="February 5 2003" disabled />
  <br>
  <br>
  <label>Age</label>
  <br>
  <input value="20" disabled />
</div>
<div class="user3">
  <label>Gender</label>
  <br>
  <input value="Male" disabled />
  <br>
  <br>
  <label>Address</label>
  <br>
  <input value="Poblacion Tayasan Negros Oriental" disabled />
  <br>
  <br>
  <label>Email Address</label>
  <br>
  <input value="johnkennethbalutan@gmail.com" disabled />
</div>
<div class="user4">
  <label>Phone Number</label>
  <br>
  <input value="09659071239" disabled />
  <br>
  <br>
  <label>Guardian's Name</label>
  <br>
  <input value="Rosemarie O. Balutan" disabled />
  <br>
  <br>
  <label>Guardian's Phone Number</label>
  <br>
  <input value="09304728103" disabled />
</div>
<div class="course">
  <input value="Bachelor of Science in Information Systems" disabled />
</div>
<hr class="hr">
<div class="wellcome">
  <h1>Welcome! <strong><?php echo $lastname1; ?></strong> to Saint Francis College School Portal</h1>
</div>
<div class="violation">
   <h1>Violation</h1>
   <div class="violation2">
   </div>
   <div class="announce">
    <h1>Announcement</h1>
    <div class="announce2">
    </div>
   </div>
</div>
<div class="ulit">
  <h1>Ewan</h1>
  <div class="ulit2">
  </div>
</div>
<script src="welcome.js"></script>
<script>
  function nextpage(select){
    window.location=select.value;
  }
</script>
</body>
</html>