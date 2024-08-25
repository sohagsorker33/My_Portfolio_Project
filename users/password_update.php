<?php 
session_start();
require '../db.php';

$user_id=$_POST['user_id'];
$select="SELECT * FROM users WHERE id='$user_id'";
$select_log=mysqli_query($db_connection,$select);
$after_assoc=mysqli_fetch_assoc($select_log);
 
$crruent_Password=$_POST['crruent_Password'];
$new_password=$_POST['new_password'];
$password_hash=password_hash($new_password,PASSWORD_DEFAULT);
$confram_Password=$_POST['confram_Password'];

$flag=false;

if(empty($crruent_Password)){
    $flag=true;
    $_SESSION['crruent_pass_arr']='Plase fill up a crruent password';
}else{
      if(!password_verify($crruent_Password,$after_assoc['Password'])){
        $flag=true;
        $_SESSION['crruent_pass_arr']='Plase fill up croect and crruent password';
      }
}
if(empty($new_password)){
    $flag=true;
    $_SESSION['new_pass_arr']='Plase fill up a new password';
}

if(empty($confram_Password)){
    $flag=true;
    $_SESSION['con_pass_arr']='Plase fill up a confram password';
}else{
    if($new_password !=$confram_Password){
        $flag=true;
        $_SESSION['con_pass_arr']='New password and confram password does not match';
    }
}

if($flag){
     
    header('location:profile.php');
}else{
    
    $update="UPDATE users SET Password='$password_hash' WHERE id=$user_id";
    mysqli_query($db_connection,$update);
    $_SESSION['update']='Password Updated!';
    header('location:profile.php');
}

?>