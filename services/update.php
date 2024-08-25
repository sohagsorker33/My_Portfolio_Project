<?php  
session_start();
require '../db.php';
$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$update="UPDATE services_section SET title='$title', description='$description' WHERE id='$id'";
mysqli_query($db_connection,$update);

$_SESSION['update']="Services Updated Successfull";
header('location:services.php');

?>