<?php 
 session_start();
 require '../db.php';
 $title=$_POST['title'];
 $name=$_POST['name'];
 $description=$_POST['description'];

 $update="UPDATE about_section SET title='$title',name='$name', description='$description'";
 mysqli_query($db_connection,$update);

 $_SESSION['update']="Updated successfull!";
 header('location:about.php');


?>