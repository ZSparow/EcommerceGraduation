<?php
   session_start();
   
   if($_SERVER['REQUEST_METHOD']=='POST'){
      require_once('db.php');

 
      function login($con,$email,$password){
         $select_query= "Select * From `user_register` WHERE `email`='$email' AND `password`='$password'";
         $result=( mysqli_query($con,$select_query));       
         if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_array($result);
            $_SESSION['NameUser'] = $row['name'];
            header('location:index.php');
         }
         else 
         header('location:login.php'); 
          
      }


      if(isset($_POST['login']))
         login($con,trim($_POST['email']),trim($_POST['pass']));

    
   }
?>
<?php

$status = session_status();
if($status == PHP_SESSION_NONE)
    session_start(); 
   

require_once('db.php');
    $admins=array("karar","ziyad","atheer");
    $name=$_POST['user'];
    $pass= $_POST['password'];
    if(in_array($name,$admins) &&($_POST['password']=='19981998') ){ 
        $_SESSION['admin'] =  $name;
        include("form_console.php");
        include("form_pc.php");
        include("form_phone.php");
    }
  
else{
    echo "<h3> please,check the username and password ,and try agin .this page is protected by the administrator</h3>";
}
?>