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

$idnumber = "";
$lastname = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'student_system');

$check=$_SESSION['idnumber'];
$ses_sql=mysqli_query($db,"select lastname,firstname,middlename,idnumber,images from student_list where idnumber='$check'");
$row=mysqli_fetch_array($ses_sql);
$lastname1=$row['lastname'];
$firstname1=$row['firstname'];
$middlename1=$row['middlename'];
$idnumber1=$row['idnumber'];


if (isset($_POST['login_user'])) {
  
  $idnumber = mysqli_real_escape_string($db, $_POST['idnumber']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $_SESSION['idnumber'] = $idnumber;
}
  if (empty($idnumber)) {
  	array_push($errors, "User ID is required!!");
  }
  if (empty($lastname)) {
  	array_push($errors, "Password is required!!");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM student_list WHERE idnumber='$idnumber' AND lastname='$lastname'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['idnumber'] = $idnumber;
      $_SESSION['lastname'] = $lastname;
  	  header('location: welcome.php');
  	}else {
  		array_push($errors, "Wrong User ID /");
      array_push($errors, "Wrong Password");
  	}
  }

?>