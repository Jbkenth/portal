<?php
session_start();

$lastname = "";
$firstname = "";
$middlename = "";
$suffix = "";
$gender="";
$civilstatus = "";
$religion = "";
$emailaddressed = "";
$contactnumber="";
$birthdate="";
$birthplace = "";
$idnumber = "";
$images = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'student_system');


if (isset($_POST['reg_user'])) {

  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
  $suffix = mysqli_real_escape_string($db, $_POST['suffix']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $civilstatus = mysqli_real_escape_string($db, $_POST['civilstatus']);
  $emailaddressed = mysqli_real_escape_string($db, $_POST['emailaddressed']);
  $contactnumber = mysqli_real_escape_string($db, $_POST['contactnumber']);
  $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
  $birthplace = mysqli_real_escape_string($db, $_POST['birthplace']);
  $idnumber = mysqli_real_escape_string($db, $_POST['idnumber']);
  $images = mysqli_real_escape_string($db, $_POST['images']);


  if (count($errors) == 0) {
  	$query = "INSERT INTO student_list (lastname, firstname, middlename, suffix, gender, civilstatus, emailaddressed, contactnumber, birthdate, birthplace, idnumber, images) 
  			  VALUES('$lastname', '$firstname', '$middlename', '$suffix', '$gender', '$civilstatus', '$emailaddressed', '$contactnumber', '$birthdate', '$birthplace', '$idnumber', '$images')";
          mysqli_query($db, $query);
  	header('location: wellcome.php');
  }
}
?>
<!doctype html>
<html>
  <style>
  .error {
  width: autopx; 
  height: auto;
  padding: 10px;
  margin: 10px 10px;  
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: center;
  font-size: 10px;
  
}
</style>
</html>