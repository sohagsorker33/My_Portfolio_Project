<?php 
session_start();
require '../db.php';

$title=$_POST['title'];
$description=$_POST['description'];
$insert="INSERT INTO services_section(title,description)VALUES('$title','$description')";
mysqli_query($db_connection,$insert);
$_SESSION['services']="Services Added Successfull";
header('location:services.php');
?>