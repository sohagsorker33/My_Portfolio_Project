<?php 
  session_start();
  require '../db.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];

  $id= $_SESSION['logged_id'];

  $update="UPDATE users SET Name='$name', Email='$email',Country='$country',Gender='$gender' WHERE id='$id'";
  mysqli_query($db_connection,$update);

  $_SESSION['success']="Profile info Updated!";
  header('location:profile.php');

?>