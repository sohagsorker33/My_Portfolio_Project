 <?php
 session_start();
 require '../db.php';
 $id=$_POST['id'];
 $title=$_POST['title'];
 $category=$_POST['category'];
 $image=$_FILES['image'];
 $select="SELECT image FROM portfolio WHERE id='$id'";
 $select_rs=mysqli_query($db_connection,$select);
 $select_assoc=mysqli_fetch_assoc($select_rs);
 if($image['name']!=''){
  $after_explode=explode('.',$image['name']);
  $extension=end($after_explode);
  $allowed_extension=array('png','jpg');
  if(in_array($extension,$allowed_extension)){
      if($image['size']<=1000000){
        $delete_form='../uploads/portfolio_image/'.$select_assoc['image'];
        unlink($delete_form);
        $file_name=uniqid().'.'.$extension;
        $new_location='../uploads/portfolio_image/'.$file_name;
        move_uploaded_file($image['tmp_name'],$new_location);
        $update="UPDATE portfolio SET title='$title',category='$category',image='$file_name' WHERE id='$id'";
        mysqli_query($db_connection,$update);
        $_SESSION['update']="Updated Successfull";
        header('location:portfolio.php');
      }else{
        $_SESSION['err']="Image size 1 MB Allowed";
        header("location:edit.php?id=".$id);
      } 
  }else{
    $_SESSION['err']="Only for PNG and JPG format at this Allowed";
    header('location:edit.php?id='.$id);
  }
 }else{
  $update="UPDATE portfolio SET title='$title',category='$category' image='$file_name' WHERE id='$id'";
        mysqli_query($db_connection,$update);
        $_SESSION['update']="Updated Successfull";
        header('location:portfolio.php');
 }
  

 ?>