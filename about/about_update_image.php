<?php 
 session_start();
 require '../db.php';
 $select_about="SELECT * FROM about_section";
 $select_about_res=mysqli_query($db_connection,$select_about);
 $select_about_assoc=mysqli_fetch_assoc($select_about_res);
 $photo=$_FILES['photo'];
  if($photo['name']!=''){
    $after_explode=explode('.',$photo['name']);
    $extension=end($after_explode);
    $allowed_extension=array('png','jpg','svg');
    if(in_array($extension,$allowed_extension)){
       if($photo['size']<=1000000){
         $delete_form='../uploads/about_photo/'.$select_about_assoc['photo'];
         unlink($delete_form);
         $file_name=uniqid().'.'.$photo['name'];
         $new_location='../uploads/about_photo/'.$file_name;
         move_uploaded_file($photo['tmp_name'],$new_location);
         $update="UPDATE about_section SET photo='$file_name'";
         mysqli_query($db_connection,$update);
         $_SESSION['success']="Photo updated successfull!";
         header('location:about.php');
       }else{
         $_SESSION['arr']="Photo size maximum 1MB!";
         header('location:about.php');
       }
    }else{
     $_SESSION['arr']="Only for PNG, JPG and SVG formet at this Allowed!";
     header('location:about.php');
    }
  } 


?>