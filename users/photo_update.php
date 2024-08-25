 <?php 

 session_start();
 require '../db.php';
 $user_id=$_POST['user_id'];
 $select="SELECT * FROM users WHERE id='$user_id'";
 $select_res=mysqli_query($db_connection,$select);
 $after_assoc=mysqli_fetch_assoc($select_res);
 $photo=$_FILES['photo'];

 $after_explode=explode('.',$photo['name']);
 $extension=end( $after_explode);
 $allowed_extension=array('png','jpg');
 if(in_array($extension,$allowed_extension)){
    if($photo['size']<=1000000){
      if($after_assoc['Photo']!=null){
         $delete_form="../uploads/users/".$after_assoc['Photo'];
         unlink($delete_form);
      }
      $file_name=uniqid().'.'.$extension;
      $new_location='../uploads/users/'.$file_name;
      move_uploaded_file($photo['tmp_name'],$new_location);
      $update="UPDATE users SET Photo='$file_name' WHERE id='$user_id'";
      mysqli_query($db_connection,$update);
      $_SESSION['photo']="Photo Update Successfull!";
      header('location:profile.php');
    }else{
      $_SESSION['err']="Image size Maxsimum 1MB Allowed!" ;
      header('location:profile.php');
    }
 }else{
    $_SESSION['err']="Only for PNG and JPG Format are allowed!";
    header('location:profile.php');
 }

 ?>