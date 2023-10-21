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
        h1{
            font-size: 25px;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
        }
        h2{
            text-align: center;
            font-style: italic;
            font-size: 17px;
            
        }
.header {
  width: 15%;
  margin: -10px auto 0px;
  color: white;
  background: #964B00;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
button{
  margin-bottom: -10px;
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
        height: 40px;
        margin-top: -1px;
        }

        .button:hover {background-color: #964B00}

        .button:active {
        background-color: #964B00;
        box-shadow: 0 3px rgb(25, 25, 25);
        transform: translateY(5px);
        }
        .glow {
  color: black;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px #964B00, 0 0 40px #964B00, 0 0 50px #964B00, 0 0 60px #964B00, 0 0 70px #964B00;
  }
  
  to {
    text-shadow: 0 0 20px white, 0 0 30px #964B00, 0 0 40px #964B00, 0 0 50px #964B00, 0 0 60px #964B00, 0 0 70px white, 0 0 80px white;
  }
}
form, .content {
  width: 15%;
  margin: auto;
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
  font-weight: bold;
  text-align: left;
  margin: 0px;
  margin-top:-5px;
}
.input-group input {
  
  height: 20px;
  width: 95%;
  padding: 5px 5px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #964B00;
}
img{
    margin-top: 10px;
}
</style> 
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <center><img src="SFC-G.png" width="150px"height="150px"/></center>
        <h1 class="glow">Saint Francis College Guihulngan,<br>Negros Oriental, Incorporated</h1>
        <h2>Bateria, Guihulngan City, Negros Oriental</h2>
        <br>
  <div class="header">
  	<h3>Parent</h3>
  </div>
  <form method="post" action="parentlogin.php">
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
  		<button type="submit"  class="button" name="login_user">Login</button>
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
</body>
</html>