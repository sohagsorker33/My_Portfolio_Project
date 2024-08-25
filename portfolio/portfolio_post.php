 <?php
 session_start();
 require '../db.php';
 $title=$_POST['title'];
 $category=$_POST['category'];
 $image=$_FILES['image'];

 $after_explode=explode('.',$image['name']);
 $extension=end( $after_explode);
 $allowed_extension=array('png','jpg');
 if(in_array($extension,$allowed_extension)){
    if($image['size']<=1000000){  
     $file_name=uniqid().'.'.$extension;
     $new_location="../uploads/portfolio_image/".$file_name;
      move_uploaded_file($image['tmp_name'],$new_location);
      $insert="INSERT INTO portfolio(title,category,image)VALUES('$title','$category','$file_name')";
      mysqli_query($db_connection,$insert);
      $_SESSION['image']="Image Uploaded Successfull!";
      header('location:portfolio.php');
    }else{
      $_SESSION['err']="Image size Maxsimum 1MB Allowed!" ;
      header('location:portfolio.php');
    }
 }else{
    $_SESSION['err']="Only for PNG and JPG Format at this allowed!";
    header('location:portfolio.php');
 }


 ?>