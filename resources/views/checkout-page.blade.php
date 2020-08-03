<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="header" >
      <div class ="header-left">
        <a href="homepage.blade.php" class="homepage"><span style="color: lightgreen; font-size=px">Renoshop</span>Bee</a>
      </div>
      <div class="header-center">
        <a class="active" href="homepage.blade.php">Home</a>
        <a href="item-list.blade.php">Men</a>
        <a href="#Women">Women</a>
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

    <hr style="color:lightgrey; height:50%;">
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Page</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Shop</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#"><span style="color:lightgreen">Checkout</span></a>
    </div>

    <div class="main-page">
    <div class="billing-detail">
      <strong>Billing Detail </strong>
    </div>

    <div class="user-info">
      <div class="row">
        <form  action="index.html">
          <div class="50-input" >
            <label for="firstname">First Name </label>
            <input type="text" name="firstname" >
          </div>

          <div class="50-input" >
            <label for="firstname">Last Name </label>
            <input type="text" name="lastname" >
          </div>


        </form>
