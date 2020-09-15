<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <title>Document</title>
</head>

<body>

<style> 
    #main-form{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .form-container{
        box-shadow:0 0 40px rgba(0,0,0, .5);
    }

</style>







    <div id="main-form">
    <div class="form-container">
    <form action="admin.php" method="POST">
    <input type="text" placeholder="Username" name="user">
    <input type="password" placeholder="password" name="password"> 
   <button class="submit-button" name="ok">ok</button>
    </form>
    </div>
    </div>
    

    




</body>
</html> 