<?php
session_start();
require("../includes/database_connect.php");
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
       echo "connection failed:".mysqli_connect_error();
       exit;
    }
    
   $c=0;
    $email = $_POST['email'];
   $password = $_POST['password'];
   $sql="select * from users where email=$email and password=$password";
   $result=mysqli_query($conn,$sql);
   if(!$result){
       echo "error".mysqli_erroe($conn);
       exit;
   }
   if($row){
    echo "Hello ".$row['name'];
    $_SESSION['user_id']=$row['id'];
    $_SSSION['full_name']=$row['full_name'];
    setcookie('user_id',$row['id'],time()+3600);
    setcookie('full_name',$row['full_name'],time()+3600);
   }

   else{
     echo "Login failed";
    }
    
     
    
     mysqli_close($conn);
?>