<?php
 require_once('db.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css links -->
    <link rel="stylesheet" href="fontawsome/css/all.min.css">
    <link rel="stylesheet" href="css/viewpages.css">
    <link rel="stylesheet" href="css/login.css">


    <title>Mobiles | Tech shop</title>
    
    
</head>
<body>

<!-- begin of slide-bar menu -->

<div class="side-bar--container" id='slidemenu'>
  <div class="side-bar">
    

  <div class="buttons-group">
  <button class='close-slide'><img src="images/icons/close.png" alt=""></button>
    <ul>
        <li class="login"><a href="#">Log in</a></li>
        <li class="signup"><a href="#">Sign up</a></li>
      </ul>
      </div>
  </div>
</div>


<!-- end of slide-bar menu -->


  <!-- begin of login form -->
  <div id="login-form" class="mainlog">
    <div class="form-container">
    	<img src="images/icons/avatar.png" class="form-avatar">
      <button  id="log-close"> <i class="fa fa-times"></i> </button>

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
  <button  id="sign-close"> <i class="fa fa-times"></i></button>



  <form  action="registerition.php" method="POST">
    <input  id="name" type="text" name="user" placeholder="Enter Name" required>
          <input type="email"      name="email" placeholder="Enter Email" required>
          <input type="password"   name="pass" placeholder="Enter Password" required> 
          <button class="submit-button" type="submit" name="register">  Ok</button> 
          <p>You have an account already ? <button id="login-account">Log in now</button></p>
    
    </form>
   </div>
  </div>
 	<!-- end of signup form -->

<!-- Begin of popup buying form -->
<div class="buy-form-container">

  <div class="payment-container">

<a href="#" class="close-buy-form"><img src="images/icons/close.png" alt=""></a>


    <div class="payment-header">
    <h2 >Payment form</h2>
    </div>

<div class="pay-form-container">
    <form action="#">

    <div class="flex-container">
      <div class="group">
        <label for="number">card number:</label>
        <input type="number" id='number' placeholder='Enter card number'>
        
      </div>

    <div class="group">
          <label for="live">Where do you live </label>
          <select name="live" id="live">
            <option value="Bg">Baghdad</option>
            <option value="Er">Erbil</option>
            <option value="Bs">Basrah</option>
            <option value="An">Anbar</option>
            <option value="Dw">Diwaniyah</option>
          </select>
          
        </div>
    </div>
      




      <div class="flex-container">
        <div class="group">
          <label for="number">card holder:</label>
          <input type="text" id='number' placeholder='Enter your name'>
        </div>


        <div class="group">
          <label for="number">Phone number</label>
          <input type="number" id='number' placeholder='Enter your phone number'>
        </div>

      </div>

        
        
      

      


      <button class='btn buy-form-btn' type="submit">Submit and buy</button>
    </form>
    </div><!-- end of pay-form-container -->


  </div><!-- end of payment-container -->

</div>  

<!-- end of popup buying form -->



 <!-- begin of navbar -->


 <nav class="navbar">
    <ul class="list-item">
      <div class="home-btn">
      <li><a href="index.php">Home</a></li>
      </div>
      <li>
        <form class="search-bar" action="#">
          <input class="search-input" type="text" placeholder="search" id='search-value'>
          <button class="search-button">search</button>
        </form>
      </li>
      <div class="right-group">
        <li class="right-item login"><a href="#">Log in</a></li>
        <li class="right-item signup"><a href="#">Sign up</a></li>
      </div>
      <button class='collapsed-button'><img src="images/icons/menu.png"></button>  
    </ul>
  </nav>


  <!-- end of navbar -->

<!-- begin of header -->

  <header class='header'>
  <section class="slider">

        <div class="items-view">
          <div class="text-box">
            <h1>Iphone 11 pro</h1>
            <p>Watch the new monster of Apple that hits the market of smartphones</p>
              <div class="buttons-container">
                
                <a href="#" class="btn btn2 buy-btn">Buy now</a>
              </div>
          </div><!-- end of text-box -->
          <div class="image-box">
            <img src="images/items/mobiles/iphone11pro.png" width= 200px class='ad-image'>
          </div><!-- end of image-box -->
        </div><!-- end of items-view -->

        <div class="items-view">
          <div class="text-box">
            <h1>Galaxy S20 ultra</h1>
            <p>Master photography with the new king of 108MP carmera phone</p>
              <div class="buttons-container">
                
                <a href="#" class="btn btn2 buy-btn">Buy now</a>
              </div>
          </div><!-- end of text-box -->
          <div class="image-box">
            <img src="images/items/mobiles/galaxys20ultra.png" width= 200px class='ad-image'>
          </div><!-- end of image-box -->
        </div><!-- end of items-view -->

        <div class="items-view">
          <div class="text-box">
            <h1>The new ROG phone 2</h1>
            <p>Enjoy your time with the new generation of gaming mobile</p>
              <div class="buttons-container">
                
                <a href="#" class="btn btn2 buy-btn">Buy now</a>
              </div>
          </div><!-- end of text-box -->
          <div class="image-box">
            <img src="images/items/mobiles/rogphone2.png" width= 200px class='ad-image'>
          </div><!-- end of image-box -->
        </div><!-- end of items-view -->


        </section>
  </header>


<!-- end of header -->



<!-- begin of main -->

    <main class="main">

  <?php
    $sql="SELECT * FROM mobile";
    $res = mysqli_query($con,$sql);
    if (mysqli_num_rows($res)) 
    while ($row = mysqli_fetch_array($res)) {
  ?>


<!-- begin of card -->

<div class="card">
  <div class="front">
    <div class="image-box">



    <img src="files/mobiles/<?php echo $row['img'];?>" alt="item image" class='item-image'>





    <img src="images/brands/<?php echo $row['brand'];?>.png" alt="" class="brand-image">
    <p class='item-price front-price'>
       <?php echo  $row['price'];?>$
      </p>
    </div>
    <p class='item-model item-name'>
      <?php echo $row['model'];?>  
    </p>
    <div class="item-description">
      <ul>
      <li>screen:- <?php echo $row['screen'];?></li>
      <li>camara:- <?php echo $row['camera'];?>MP</li>
      <li>memory:- <?php echo $row['memory'];?>GB</li>
      <li>storage:- <?php echo $row['storage'];?>GB</li>

      </ul>
    </div>
    
  </div><!-- end of front -->



  <div class="back">
    <p  class="name" >
      <?php echo $row['model'];?> 
    </p>

    <div class="description"  >
      <p>
        <?php echo $row['description'];?>
      </p>
      <ul>
      <li>screen:- <?php echo $row['screen'];?></li>
      <li>camara:- <?php echo $row['camera'];?>MP</li>
      <li>processor:- <?php echo $row['processor'];?></li>
      <li>memory:- <?php echo $row['memory'];?>GB</li>
      <li>storage:- <?php echo $row['storage'];?>GB</li>

      </ul>
    </div>

    

    <div class="buttons-container">
      <button class="btn cart-btn buy-btn">Buy now</button>
      <p class='item-price'>
      <?php echo  $row['price'];?>$
    </p>
    </div>

  </div><!-- end of back -->
</div><!-- end of card -->

<?php 
  } ?>

    
    </main>


<!-- end of main -->

  
 <!-- begin of footer -->
  <footer class="footer">
    <div class="about-box">
      <h1>About us</h1>
      <p>We are a startup company providing whatever you need. We have all what you want, we have gaming consoles, smart phones and several brands of laptops. look at what we have and enjoy your new device.</p>
    </div>
    <!-- <div class="contact-box">
      <h1>Contact us</h1>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo possimus harum ex voluptates aliquam recusandae nemo debitis est quaerat saepe blanditiis, reiciendis, sapiente laboriosam officiis accusamus quia voluptatum! Nulla laudantium voluptatibus vero necessitatibus nesciunt, consequuntur est distinctio minus ipsum in qui sit asperiores alias ab. Expedita voluptatum corrupti dolore labore.</p>

      <form action="#">
        <div class="input-group" id='email-input'>
          <input type="email" id="email" required>
          <label for="email">Your email</label>
        </div>

        <div class="input-group">
          <input type="text" id="name" required stat>
          <label for="name">Your name</label>
        </div>

        <div class="input-group">
         <textarea name="message" id="message" cols="30" rows="10" required></textarea>
          <label for="message">Write message here</label>
        </div>
        <button class="btn" type='submit'>send message</button>
      </form>
    </div> -->
  </footer>
 <!-- end of footer -->
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/search.js"></script>
</body>
</html>