<?php 
session_start();
require 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_hash=password_hash($password,PASSWORD_DEFAULT);
$con_pass=$_POST['con_pass'];
$country=$_POST['country'];
$gender=$_POST['gender'];

 
 
$flag=false;

if(empty($name)){
    $flag=true;
    $_SESSION['nam_arr']='Please fill up enter your Name';
}else{
    $_SESSION['name']=$name;
}

if(empty($email)){
    $flag=true;
    $_SESSION['email_arr']='Please fill up enter your Email Adress';
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $flag=true;
        $_SESSION['email_arr']=' Fill up Valid Email Adress';   
    }else{
        $_SESSION['email']=$email;
    }
}


if(empty($password)){
    $flag=true;
    $_SESSION['pass_arr']='Please fill up enter your Password';
}else{
    $_SESSION['password']=$password;
} 

  

 
if(empty($con_pass)){
    $flag=true;
    $_SESSION['con_pass_arr']='Please fill up enter your Confram Password';
}else{
    if($password!=$con_pass){
        $flag=true;
        $_SESSION['con_pass_arr']='Password and confram password does not match'; 
    }else{
        $_SESSION['con_pass']=$con_pass;
    }
}


if(empty($country)){
    $flag=true;
    $_SESSION['country_arr']='Please fill up select Country';
}else{
    $_SESSION['country']=$country;
}
if(empty($gender)){
    $flag=true;
    $_SESSION['gen_arr']='Please fill up select Gender';
}else{
    $_SESSION['gender']=$gender;
}
 

if($flag==true){
  header('location:users/user.php');
}else{
    $insert="INSERT INTO users(Name,Email,Password,Country,Gender)VALUES('$name','$email','$password_hash','$country','$gender')";
    mysqli_query($db_connection,$insert);
   $_SESSION['success']="Users Registration Successfull";
    
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['con_pass']);
    unset($_SESSION['country']);
    unset($_SESSION['gender']);
    header('location:users/user.php');
}

  


 


?>