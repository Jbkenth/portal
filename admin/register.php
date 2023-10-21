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
  height: auto;
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
  margin-top: -22px;
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
h3{ 
  margin-top: -10px;
  margin-bottom: 8px;
  font-size: 30px;
}
</style> 
<body>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <center><img src="SFC-G.png" width="150px"height="150px"/></center>
        <h1 class="glow">Saint Francis College Guihulngan,<br>Negros Oriental, Incorporated</h1>
        <h2>Bateria, Guihulngan City, Negros Oriental</h2>
        <br>
    <div class="header">
  	<h3>Admin</h3>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>User ID</label>
  	  <input type="text" name="userid" minlength="9" maxlength="9" placeholder="Type here..." value="<?php echo $userid; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="text" name="pass" minlegth="8" maxlength="8" placeholder="Type here..." value="<?php echo $pass; ?>" required>
  	</div>
      <div class="input-group">
      <button type="submit"  class="button" name="reg_user">Register</button>
  	</div>
  </form>
</body>
</html>