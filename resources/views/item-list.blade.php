<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">

    <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}



.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  line-height: 25px;
  border-radius: 4px;
}



.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  color: Green;
}

.header-left
{
  width: 20%;
  font-weight: bolder;
  font-size: 25px;
}
.header-center {
  width:35%;
  margin:0 auto;
  color: gray;
  padding-bottom: 10px;
  font-weight: bolder;


}
.header-right {
  width: 10%;
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }

  .header-right {
    float: none;
  }
</style>
  </head>
  <body>
    <div class="header" >
  <div class ="header-left">
    <a href="homepage.blade.php" class="homepage"><span style="color: lightgreen; font-size=px">Renoshop</span>Bee</a>
  </div>
  <div class="header-center">
    <a class="active" href="homepage.blade.php">Home</a>
    <a href="item-list.blade.php">Men</a>
    <a href="item-list.blade.php">Women</a>
    <a href="Kids" >Kids</a>
    <a href="Jewellery"> Jewellery</a>
    <a href="Accessory"> Accessory</a>
  </div>
  <div class ="header-right">
    <a href ="#shopping cart"><i class="fa fa-shopping-cart fa 4x" aria-hidden="true"></i></a>
    <a href ="#search"> <i class="fa fa-search fa 4x" aria-hidden="true"></i>  </a>
    <a href = "menu"><i class="fa fa-bars fa 4x" aria-hidden="true"></i></a>
   </div>
    </div>
  </body>
</html>
