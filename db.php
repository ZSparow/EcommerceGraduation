<?php
$server='localhost';
$username='root';
$password='';
$db='shopping';
$con=@(mysqli_connect($server,$username,$password,$db)) or die('Something went wrong');


    mysqli_query($con,"SET character_set_client=cp1256");
    mysqli_query($con,"SET character_set_connection=cp1256");
    mysqli_query($con,"SET character_set_database=cp1256");
    mysqli_query($con,"SET character_set_results=cp1256");
    mysqli_query($con,"SET character_set_server=cp1256");
    mysqli_set_charset($con,'utf8');




