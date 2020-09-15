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