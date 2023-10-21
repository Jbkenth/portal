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

$lastname = "";
$firstname = "";
$middlename = "";
$email    = "";
$idnumber = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'capstone project');


if (isset($_POST['reg_user'])) {
  
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
  $idnumber = mysqli_real_escape_string($db, $_POST['idnumber']);


  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($middlename)) { array_push($errors, "Middlename is required"); }
  if (empty($idnumber)) { array_push($errors, "ID Number is required"); }

  if (count($errors) == 0) {
  	$query = "INSERT INTO users (lastname, firstname, middlename, idnumber) 
  			  VALUES('$lastname', '$firstname', '$middlename', '$idnumber')";
  	mysqli_query($db, $query);
  	$_SESSION['idnumber'] = $idnumber;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: wellcome.php');
  }
}

if (isset($_POST['login_user'])) {
  $idnumber = mysqli_real_escape_string($db, $_POST['idnumber']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);

  if (empty($idnumber)) {
  	array_push($errors, "User ID is required!!");
  }
  if (empty($lastname)) {
  	array_push($errors, "Password is required!!");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE idnumber='$idnumber' AND lastname='$lastname'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idnumber'] = $idnumber;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong User ID /");
      array_push($errors, "Wrong Password");
  	}
  }
}

?>