<?php 
session_start();
require '../db.php';
  $select_logo="SELECT * FROM logo_images";
 $select_logo_res=mysqli_query($db_connection,$select_logo);
 $select_logo_assoc=mysqli_fetch_assoc($select_logo_res); 
 $header_logo=$_FILES['header_logo'];
 $footer_logo=$_FILES['footer_logo'];
 if($header_logo['name']!=''){
    $after_explode=explode('.',$header_logo['name']);
    $extension=end($after_explode);
    $allowed_extension=array('png','jpg');
    if(in_array($extension,$allowed_extension)){
      if($header_logo['size']<=1000000){
        $delete_form='../uploads/logos/'.$select_logo_assoc['header_logo'];
         unlink($delete_form);
         $file_name=uniqid().'.'.$extension;
         $new_location='../uploads/logos/'.$file_name;
         move_uploaded_file($header_logo['tmp_name'],$new_location);
         $update="UPDATE logo_images SET header_logo='$file_name'";
         mysqli_query($db_connection,$update);
        $_SESSION['logo_update']="Logo updated successfull";
         header('location:logo.php');
      }else{
        $_SESSION['err']="Logo Image Size Maximum 1MB";
        header('location:logo.php');
   }}else{
         $_SESSION['err']="Only for PNG and JPG format att this Allowed!";
         header('location:logo.php');
    }
}

if($footer_logo['name']!=''){
    $after_explode=explode('.',$footer_logo['name']);
    $extension=end($after_explode);
    $allowed_extension=array('png','jpg');
    if(in_array($extension,$allowed_extension)){
      if($footer_logo['size']<=1000000){
        $delete_form='../uploads/logos/'.$select_logo_assoc['footer_logo'];
        unlink($delete_form);
        $file_name=uniqid().'.'.$extension;
        $new_location='../uploads/logos/'.$file_name;
        move_uploaded_file($footer_logo['tmp_name'],$new_location);
        $update="UPDATE logo_images SET footer_logo='$file_name'";
        mysqli_query($db_connection,$update);
        $_SESSION['logo_update']="Logo updated successfull";
        header('location:logo.php');
      }else{
        $_SESSION['error']="Logo Image Size Maximum 1MB";
        header('location:logo.php');
      }
    }else{
        $_SESSION['error']="Only for PNG and JPG format att this Allowed!";
        header('location:logo.php');
    }
}
?>