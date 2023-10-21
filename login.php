<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Saint Francis College Guihulngan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	body {
  font-size: 120%;
  background: tan;
}
.header {
  width: 20%;
  margin: 100px auto 0px;
  color: white;
  background: #964B00;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}

.button 
        {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        font-size: 19px;
        text-align: center;
        cursor: pointer;
        color: #fff;
        background-color: #964B00;
        border-radius: 20px;
        box-shadow: 0 3px gray;
        width: 100%;
        height: 50px;
        }

        .button:hover {background-color: #964B00}

        .button:active {
        background-color: #964B00;
        box-shadow: 0 3px rgb(25, 25, 25);
        transform: translateY(5px);
        }
form, .content {
  width: 20%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  
  height: 30px;
  width: 95%;
  padding: 5px 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #964B00;
}
</style> 
<body>
  <div class="header">
  	<h2>Student</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>User ID</label>
  		<input type="password" placeholder="Type here..." name="idnumber" id="myinput">
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" placeholder="Type here..." name="lastname" id="myInput">
  	</div>
	  <p><input type="checkbox" onclick="myFunction()"> Show</p>
  	<div class="input-group">
  		<button type="submit"  class="button" name="login_user" onmousedown="ken.play();">Login</button>
  	</div>
  </form>
  <script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
  <script>
       var ken = new Audio();
       ken.src = 'click.mp3'
    </script>
</body>
</html>