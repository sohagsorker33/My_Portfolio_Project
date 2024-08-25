 <?php
 
 session_start();

 require 'db.php';

 $email=$_POST['email'];
 $password=$_POST['password'];

 $flag=false;


 if(empty($email)){
    $flag=true;
    $_SESSION['email_arr']="Plase fill up a email address";
 }else{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $flag=true;
        $_SESSION['email_arr']="Enter is your valid email address";
    }else{
        $select="SELECT COUNT(*) as total FROM users WHERE email='$email'";
        $select_res=mysqli_query($db_connection,$select);
        $after_assoc=mysqli_fetch_assoc($select_res);
        if($after_assoc['total']!=1){
            $flag=true;
            $_SESSION['email_arr']="Email does not match exist"; 
        }
    }
 }
 
 if(empty($password)){
    $flag=true;
    $_SESSION['pass_arr']="Plase fill up a password";
 }else{
    $select="SELECT * FROM users WHERE email='$email'";
    $select_res=mysqli_query($db_connection,$select);
    $after_assoc=mysqli_fetch_assoc($select_res);
    if(!password_verify($password,$after_assoc['Password'])){
        $flag=true;
        $_SESSION['pass_arr']="Worng Password";
    } else{
        $_SESSION['loggedIn']="";
        $_SESSION['logged_id']=$after_assoc['ID'];
        header('location:deshboard.php');
      }

 }
 
 if($flag){

    header('location:login.php');
 }
 
 ?>