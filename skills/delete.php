<?php 
session_start();
require '../db.php';
$id=$_GET['id'];
$delete="DELETE FROM skills WHERE id='$id'";
mysqli_query($db_connection,$delete);

$_SESSION['deleted']="Delete successfull";
header('location:skill.php');

?>