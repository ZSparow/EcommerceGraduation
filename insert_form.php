

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/insertForm.css" />
    <title>Insert a new item</title>
  </head>
  <body>
    <div class="form-container">
      <form action="dashboard.php" method="POST" class="form" enctype="multipart/form-data">
        <div class="group">
          <label for="cars">Add new element to :</label>
          <select name="forms" id="forms">
            <option value="insert_pc">Computers page</option>
            <option value="insert_ph">Mobiles page</option>
            <option value="insert_con">Consoles page</option>
          </select>
        </div>
        <!-- end of group -->

        <div class="group">
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
        <!-- end of group -->

        <div class="group">
          <label for="model">Item model :</label>
          <input name='model'
            required
            id="model"
            type="text"
            value="model"
            placeholder="Item model"
          />
        </div>
        <!-- end of group -->

        <div class="group">
          <label for="price">Item price :</label>
          <input name="price"
            required
            id="price"
            type="number"
            value="price"
            placeholder="Item price"
          />
        </div>
        <!-- end of group -->

        <!-- not for pc and console -->
        <div class="group" id="screen-group">
          <label for="screen">Item screen :</label>
          <input name="screen"
            required
            id="screen"
            type="number"
            value="screen"
            placeholder="Item screen"
          />
        </div>
        <!-- end of group -->

        <!-- not for pc and console -->

        <div class="group" id="camera-group">
          <label for="camera">Item camera :</label>
          <input
          name="camera"
            required
            id="camera"
            type="number"
            value="camera"
            placeholder="Item camera"
          />
        </div>
        <!-- end of group -->

        <!-- not for console -->
        <div class="group" id="processor-group">
          <label for="processor">Item processor :</label>
          <input
          name="processor"
            required
            id="processor"
            type="number"
            value="processor"
            placeholder="Item processor"
          />
        </div>
        <!-- end of group -->
        <div class="group">
          <label for="memory">Item memory :</label>
          <input
          name="memory"
            required
            id="memory"
            type="number"
            value="memory"
            placeholder="Item memory"
          />
        </div>
        <!-- end of group -->
        <div class="group">
          <label for="storage">Item storage :</label>
          <input
          name="storage"
            required
            id="storage"
            type="number"
            value="storage"
            placeholder="Item storage"
          />
        </div>
        <!-- end of group -->

        <!-- not for mobile -->
        <div class="group">
          <label for="graphics">Item graphics card :</label>
          <input
   name="graphics"
            required
            id="graphics"
            type="number"
            value="storage"
            placeholder="Item graphics card"
          />
        </div>
        <!-- end of group -->
        <div class="group">
          <label for="desecription">Item desecription :</label>

          <textarea
          
            required
            name="desecription"
            id="desecription"
            cols="30"
            rows="5"
            placeholder="item desecription"
          ></textarea>
        </div>
        <!-- end of group -->
        <div class="group">
          <label for="img">Item image :</label>
          <input
          name="img"
            required
            id="image"
            type="file"
         
          />
        </div>
        <!-- end of group -->

        <button name="" class="btn" id="submit-btn" type="submit">
          Add the item
        </button>
      </form>
    </div>

    <script src="js/manage.js"></script>
  </body>
</html>
