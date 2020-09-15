
  <?php
   session_start();

    require_once('db.php');
  
?>

<!DOCTYPE html>
<html>
<head>


    <!-- css files -->
    <link rel="stylesheet" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/style2.css"> -->
    <link id='page-style' rel="stylesheet" href="css/style3.css">

    <!-- favicon link -->
    <link rel="icon" href="images/icons/favicon.png">

    <!-- link fonts from google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <!-- meata tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shoping</title>



</head>
<body>

<!-- begin of login form -->
<div id="login-form" class="mainlog">
    <div class="form-container">
    	<img src="images/icons/avatar.png" class="form-avatar">
      <button  id="log-close"> <i class="fa fa-times"></i></button>

      <form  action="validate.php"  method="POST">
    <!-- <input  id="name" type="text"  name="user" placeholder="Enter Name" required> -->
          <input type="email"      name="email" placeholder="Enter Email" required>
          <input type="password"   name="pass" placeholder="Enter Password" required> 
          <button class="submit-button" type="submit" name="login"> Log in <i class="fas fa-sign-in-alt"></i></button> 
          <p>Don't you have an account yet ? <button id="create-account">create a new account</button></p>
    
    </form>

        
    </div>
  </div>
  <!-- end of login form -->


	<!-- begin of signup form -->
  <div id="signup-form" class="mainlog">
    <div class="form-container">
    	<img src="images/icons/avatar.png" class="form-avatar">
  <button  id="sign-close"> <i class="fa fa-times"></i> </button>
  <form  action="registerition.php" method="POST">
    <input  id="name" type="text"  name="user" placeholder="Enter Name" required>
          <input type="email"      name="email" placeholder="Enter Email" required>
          <input type="password"   name="pass" placeholder="Enter Password" required> 
          <button class="submit-button" type="submit" name="register">  Ok</button> 
          <p>You have an account already ? <button id="login-account">Log in now</button></p>
    
    </form>
   </div>
  </div>
 	<!-- end of signup form -->


   

  <!-- begin of navbar -->


  <nav class="navbar">
    <ul class="list-item">
      <li><a href="index.php">Home</a></li>
      <li><a href="computer.php">Computers</a></li>
      <li><a href="mobile.php">Phones</a></li>
      <li><a href="console.php">Gaming Consoles</a></li>
      <li class="right-item" id="login"><a href="#">Log in</a></li>
      <li class="right-item" id="signup"><a href="#">Sign up</a></li>
      
      
    </ul>
  </nav>


  

  <!-- end of navbar -->


  <!-- Begin of header -->

  <header class="header">
      <div class="container">
        <h1 class="main_text">Welcome to TechSop</h1>
        <p class="sub_text">
          You can find whatever you need just with one click!
        </p>
        <a href="#main" class="btn">Start exploring</a>
      </div>
    </header>

<!-- end fo header -->

<!-- begin of main view -->
<main class='main' id='main'>






<!-- begin of cards container -->
<div class="cards-container">


  <!-- first card -->
  <div class="card">
    <div class="card-header">
      <img id='computer-image' src="images/icons/computer2.png" alt="" class="icon">
    </div>
    <div class="card-main">
      <p>Need a new computer ? Check out what you need</p>
      <a class='btn' href="computer.php">Check it out</a>
    </div>
  </div>
  <!-- end of first card -->

  <!-- second card -->
  <div class="card">
    <div class="card-header">
      <img id='mobile-image' src="images/icons/phone2.png" alt="" class="icon">
    </div>
    <div class="card-main">
      <p>Check out our new collection of smartphones</p>
      <a class='btn' href="mobile.php">Check it out</a>
    </div>
  </div>
  <!-- end of second card -->

  <!-- third card -->
  <div class="card">
    <div class="card-header">
      <img id='console-image' src="images/icons/console2.png" alt="" class="icon">
    </div>
    <div class="card-main">
      <p>You like video games? We have alot of video games consoles</p>
      <a class='btn' href="console.php">Check it out</a>
    </div>
  </div>
  <!-- end of third card -->


</div>
<!-- end of cards container -->


</main>
<!-- end of main view -->


<div class="action">
  <span><img src="images/icons/style.svg" alt=""></span>
  <ul>
    <li id='style1'>style 1</li>
    <li id='style2'>style 2</li>
    <li id='style3'>style 3</li>
  </ul>
</div>


    <script src="js/change.js"></script>
    <script src='js/logandSign.js'></script>
    

 

</body>
</html>