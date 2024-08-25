<?php 
 session_start();
 require '../db.php';
 $name=$_POST['name'];
 $description=$_POST['description'];
 $image=$_FILES['image'];
 $message=$_POST['message'];
 
  if($image['name']==''){
   $insert="INSERT INTO testimonial(name,description,message)VALUES('$name','$description','$message')";
    mysqli_query($db_connection,$insert);
    $_SESSION['insert']='Insert Successfull';
    header('location:../index.php#feedback');
  }else{
     $after_explode=explode('.',$image['name']);
     $extension=end($after_explode);
     $allowed_extension=array('png','jpg');
     if(in_array($extension,$allowed_extension)){
        if($image['size']<=1000000){
         $file_name=uniqid().'.'.$extension;
         $new_location='../uploads/testimonial/'.$file_name;
         move_uploaded_file($image['tmp_name'],$new_location);
         $insert="INSERT INTO testimonial(name,description,message,image)VALUES('$name','$description','$message','$file_name')";
         mysqli_query($db_connection,$insert);
         $_SESSION['insert']='Insert Successfull';
         header('location:../index.php#feedback');
     }else{
         $_SESSION['err']="Image size maximum 1 MB  Allowed";
         header('location:../index.php#feedback');
     }
     }else{
         $_SESSION['err']="Only for PNG and JPG format at this Allowed";
         header('location:../index.php#feedback');
     }
  }
?>