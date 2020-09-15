<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){

 
   require_once('db.php');

   function register($con,$name,$email,$password){
         $select_query= "Select * From `user_register` WHERE `email`='$email' AND `password`='$password'";
         $result = mysqli_query($con,$select_query);
         
         if(mysqli_num_rows($result) > 0)
            echo "Email alreadt tokan";
         
         else{
         $reg = "INSERT INTO `user_register`( `name`, `email`, `password`) VALUES ('".$name."','".$email."','".$password."')";
          
         if(mysqli_query($con,$reg)){
            echo "register succesfully";
            $_SESSION['NameUser'] = $name;
            header('location:index.php');
         }
         else
         echo "Error:  " . mysqli_error($con);
         }
   }

   if(isset($_POST['register']))
   register($con,trim($_POST['user']),trim($_POST['email']),trim($_POST['pass']));


   }

?>