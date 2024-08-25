<?php 
session_start();
require '../db.php';
$id=$_GET['id'];
$delete="DELETE FROM services_section WHERE id='$id'";
mysqli_query($db_connection,$delete);
$_SESSION['delete']="Deleted successfull";
header('location:services.php');


?>