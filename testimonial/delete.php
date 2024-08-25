<?php 
session_start();
require '../db.php';
$id=$_GET['id'];
$select="SELECT image FROM testimonial WHERE id='$id'";
$select_res=mysqli_query($db_connection,$select);
$select_assoc=mysqli_fetch_assoc($select_res);
if($select_assoc['image']!=null){
    $delete_form='../uploads/testimonial/'.$select_assoc['image'];
    unlink($delete_form);
}
$delete="DELETE FROM testimonial WHERE id='$id'";
mysqli_query($db_connection,$delete);
header('location:testimonial.php');
$_SESSION['delete']="Delete form successfull";


?>