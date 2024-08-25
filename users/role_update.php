<?php 
 session_start();

 require '../db.php';

 $role=$_POST['role'];
 $user=$_POST['user'];

 $update="UPDATE users SET Role='$role' WHERE id=$user";
 mysqli_query($db_connection,$update);
 $_SESSION['success']='Role Assign Successfully!';
 header('location:user.php');


?>