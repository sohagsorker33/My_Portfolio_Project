<?php 
 session_start();
 require '../db.php';

 $id=$_GET['id'];
 $select_status="SELECT * FROM portfolio WHERE id='$id'";
 $select_status_res=mysqli_query($db_connection,$select_status);
 $select_status_assoc=mysqli_fetch_assoc($select_status_res);

 if($select_status_assoc['status']==1){
    $update="UPDATE portfolio SET status=0 WHERE id='$id'";
    mysqli_query($db_connection,$update);
    $_SESSION['status_update']="Status Update Deactiveted";
    header('location:portfolio.php');
 }else{
   $update="UPDATE portfolio SET status=1 WHERE id='$id'";
   mysqli_query($db_connection,$update);
   $_SESSION['status_update']="Status Update Activeted";
   header('location:portfolio.php'); 
 }


?>