<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Saint Francis College Guihulngan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h3>Enrolling System</h>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div>
  	  <label>Lastname</label>
  	  <input type="text" name="lastname" placeholder="Type here..." value="<?php echo $lastname; ?>" required>
  	</div>
  	<div>
  	  <label>Firstname</label>
  	  <input type="text" name="firstname" placeholder="Type here..." value="<?php echo $firstname; ?>" required>
  	</div>
  	<div>
  	  <label>Middlename</label>
  	  <input type="text" name="middlename" placeholder="Type here..." value="<?php echo $middlename; ?>" required>
  	</div>
	  <div>
  	  <label>ID Number</label>
  	  <input name="idnumber" minlength="9" maxlength="9" placeholder="Type here..." value="<?php echo $idnumber; ?>" required>
  	</div>
  	<div>
  	  <button type="submit" class="btn" name="reg_user">Submit</button>
  	</div>
  	<p>
  		Have an account? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>