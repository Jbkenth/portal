<!doctype html>
<html>
  <style>
  .error {
  width: auto; 
  height: auto;
  padding: 10px;
  margin: 10px 10px;  
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: center;
  font-size: 18px;
  
}
</style>
</html>
<?php
session_start();

$userid = "";
$pass = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'capstone project');


if (isset($_POST['reg_user'])) {
  
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  if (count($errors) == 0) {
  	$query = "INSERT INTO adminn (userid, pass) 
  			  VALUES('$userid', '$pass')";
  	mysqli_query($db, $query);
  	$_SESSION['userid'] = $userid;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: wellcome.php');
  }
}

if (isset($_POST['login_user'])) {
  $userid = mysqli_real_escape_string($db, $_POST['userid']);
  $pass = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($userid)) {
  	array_push($errors, "User ID is required!!");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required!!");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM adminn WHERE userid='$userid' AND pass='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userid'] = $userid;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: home.html');
  	}else {
  		array_push($errors, "Wrong User ID /");
      array_push($errors, "Wrong Password");
  	}
  }
}

?>