<?php 
$status = session_status();
if($status == PHP_SESSION_NONE)
    session_start(); 
    
 if(isset($_SESSION['admin'])){

    $msg_item = "";
    if (isset($_GET['data_item'])) {
        $data= unserialize(base64_decode($_GET['data_item']));
      
        if ($data['stat']===true) {
            $msg_item= $data['item'];
        }
      
      }
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>add Pc form</title>
      <link rel="stylesheet" href="css/form.css">
    </head>
    <body>
    
    <div class="form-container">
      <h1>Add new PC</h1>
      <form action="dashboard.php" method="POST" enctype="multipart/form-data">
      <div class="form-content">
        <!-- <input type="text" name="brand" placeholder="enter brand" required /> -->


        <div class="select-menu">
          <label for="brand">Item brand :</label>

          <select name="brand" id="brands">
            <option value="acer" >acer </option>
            <option value="alienware">alienware</option>
            <option value="apple">apple</option>
            <option value="asus">asus</option>
            <option value="blackberry">blackberry</option>
            <option value="dell">dell</option>
            <option value="hp">hp</option>
            <option value="htc">htc</option>
            <option value="huawei">huawei</option>
            <option value="lenovo">lenovo</option>
            <option value="lg">lg</option>
            <option value="microsoft">microsoft</option>
            <option value="motorola">motorola</option>
            <option value="msi">msi</option>
            <option value="nokia">nokia</option>
            <option value="oppo">oppo</option>

            <option value="predator">predator</option>
            <option value="rog">rog</option>
            <option value="samsung">samsung</option>
            <option value="sony">sony</option>
            <option value="toshiba">toshiba</option>
            <option value="vaio">vaio</option>

            <option value="xaiomi">xaiomi</option>

            <option value="select" disabled>consoles brands</option>
            <option value="xbox">xbox</option>
            <option value="playstation">playstation</option>
            <option value="nintendo">nintendo</option>
          </select>
        </div>





        <input type="text" name=" model" placeholder="model" required/>
        <input type="number" name="price" placeholder="enter price" required/>
        
        <input type="text" name=" processor" placeholder="processor" required/>
        <input type="number" name=" memory" placeholder="memory" required/>
        <input type="number" name=" storage" placeholder="storage" required/>
        <input type="text" name=" graphics" placeholder="graphics" required/>
        <input type="file" name="img" placeholder="enter image" required/>
        <textarea name="description" id="" cols="30" rows="3" placeholder="description"></textarea>

        <button type="submit" class="submit" name="insert_pc">insert</button> 
        </div>       
      </form>
     
      
    </div>


    </body>
</html>
<?php
  }
  else
 echo "<script type='text/javascript'>location.href='added_form.php';</script>";
?>