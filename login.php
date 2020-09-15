 
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create login and register</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<h1>login</h1>
    <form class="form-container " action="validate.php"  method="POST">
    <!-- <input  id="name" type="text"  name="user" placeholder="Enter Name" required> -->
          <input type="email"      name="email" placeholder="Enter Email" required>
          <input type="password"   name="pass" placeholder="Enter Password" required> 
          <button class="submit-button" type="submit" name="login"> Log in <i class="fas fa-sign-in-alt"></i></button> 
          <p>Don't you have an account yet ? <button id="create-account">create a new account</button></p>
    
    </form>
    

    
</body>
</html>