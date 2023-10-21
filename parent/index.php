<?php 
  session_start(); 

  if (!isset($_SESSION['idnumber'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['idnumber']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saint Francis College Guihulngan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	body{
		background: tan;
	}
	h6{
		margin-top:-17px;
	}
	.header {
  width: 30%;
  margin: 100px auto 0px;
  color: white;
  background: #964B00;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #964B00;
  width: 50px;
  border: none;
  border-radius: 5px;
}
	</style>
<body>

<div class="header">
	<h2>Personal Information</h2>
</div>
		
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
		<?php  if (isset($_SESSION['idnumber'])) : ?>
    	<p><center>Your ID Number: <strong><?php echo $_SESSION['idnumber']; ?></strong></center></p>
		<br>
		<p>
         <a href="index.php?logout='1'" style="color: white;" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
        </p>
		<h6 align="right">
		<a href="" style="color: white;" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Next</a>
	</h6>
    <?php endif ?>
</div>
</body>
</html>