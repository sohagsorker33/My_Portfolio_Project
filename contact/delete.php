<?php 
session_start();
require '../db.php';
$id=$_GET['id'];
$delete="DELETE FROM contact WHERE id='$id'";
mysqli_query($db_connection,$delete);
header('location:contact.php');
$_SESSION['delete']="Delete form successfull";


?>