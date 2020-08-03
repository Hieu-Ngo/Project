<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/item-list.css">
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
        <a href="#"><span style="color:lightgreen">Category</span></a>
    </div>


    <div class="mainpage clearfix">
      <aside class="sidebar">
        <div class="category">
          <div style="padding-left:5px"><strong>Categories</strong> </div>
          <div>
            <ul id="category-list">
              <li><a href="#Accessory"></a>Accessory(15)</li>
              <li><a href="#Dresses"></a>Dresses(20)</li>
              <li><a href="#Men"></a>Men(15)</li>
              <li><a href="#Women"></a>Women(15)</li>
              <li><a href="#Watch"></a>Watch(15)</li>
              <li><a href="#"></a>Clothing(15)</li>
              <li><a href="#"></a>Bags(15)</li>

            </ul>
        </div>
        <hr>
      </div>
        <div class="price">
          <div id="slider"> </div>
          <br>
          <br>
          <div class="input-price">
            <input type="text" name="min-valuue" placeholder="100" class="min-value">

            <input type="text" name="max-value" placeholder="1000"class="max-value" >
            <span style="background-color:lightgreen;padding:1px"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        <hr>
      </div>
      <div class="size">
        <div><strong>Size</strong></div>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px; box-sizing:border-box">XS</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">S</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">M</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">L</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">SL</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">XL</span>
        <span style="padding:1px 10px 1px 10px;border:solid 0.2px black; width:24%;font-size:12px;box-sizing:border-box">XXL</span>
        <br>
        <hr style="margin-top:8px;">
      </div>
      <div class="colors">
        <div style="padding-left:2px"><strong> Color </strong ></div>
        <div class="color-checkbox">
          <div>
          <input type="checkbox" >
          <label class="container">Black
              <span class="checkmark"></span>
            </label>
          </div>
          <div>
          <input type="checkbox" >
          <label class="container">Orange
              <span class="checkmark"></span>
            </label>
          </div>
          <div>
          <input type="checkbox" >
          <label class="container">Green
              <span class="checkmark"></span>
            </label>
          </div>
          <div>
          <input type="checkbox" >
          <label class="container">Blue
              <span class="checkmark"></span>
            </label>
          </div>
          <div>
          <input type="checkbox" checked="checked">
          <label class="container">Yellow
              <span class="checkmark"></span>
            </label>
          </div>
        </div>


      </div>
      <hr>
      <div class="top-rated">
        <div class="top-rated-content">
          <img src="image/vertical rectangle.jpg" alt="">
          <div class="top-rated-text"> Casual man Wearing Cool Shoe
            <br>
           $250.00
         </div>



        </div>

      </div>

      </aside>


      <div class="content">
        <div class="product-list">
        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <img src="image/vertical rectangle.jpg" alt="">
        <div class="product-info">
          <div>
          <span><strong>Crown Summit Backpack </strong> </span>
          </div>
          <div>
          <span style="color:lightGreen"> $250.00 </span>
        </div>
        </div>
        </div>
        </div>

        <div class="page-number">
          <hr>
          <div style="text-align:center">1  2  3  4  5  6 .</div>
          <hr>

      </div>
      </div>
    </div>

      <div class="connect">
        <div class="connect-left">

          We deliver your dream Website.Stay connect with us
        </div>
        <div class="connect-right">
          <i class="fab fa-twitter fa-lg" style="margin-right:10px" ></i>
          <i class="fab fa-facebook fa-lg" style="margin-right:10px"></i>
          <i class="fab fa-instagram fa-lg"style="margin-right:10px"></i>
          <i class="fab fa-linkedin fa-lg"style="margin-right:10px"></i>

        </div>
        <hr style="color:lightgrey; ">

      </div>



      <div class="info-page">
      <ul>
        <li><h4> Information </h4></li>
       <li><a href='' title='Link'>Delivery Information</a></li>
       <li><a href='' title='Link'>Site Map</a></li>
       <li><a href='' title='Link'>Contact Us</a></li>
       <li><a href='' title='Link'>Privecy Policy</a></li>
       <li><a href='' title='Link'>My Account</a></li>


      </ul>
      <ul>
        <li><h4> Your Account </h4></li>
       <li><a href='' title='Link'>Track YOur Order</a></li>
       <li><a href='' title='Link'>My Wishlist</a></li>
       <li><a href='' title='Link'>My Account</a></li>
      </ul>
      </ul>
      <ul>
        <li><h4> Help </h4></li>
       <li><a href='' title='Link'>FAQ</a></li>
       <li><a href='' title='Link'>Shipping</a></li>
       <li><a href='' title='Link'>Privacy Policy</a></li>
      </ul>
      <ul>
        <li><h4> Contact Information </h4></li>
       <li><a href='' title='Link'>123 Your Address</a></li>
       <li><a href='' title='Link'>+121231231241</a></li>
       <li><a href='' title='Link'><span style="color:lightGreen">email@emailaddress.com</a><span></li>
      </ul>
      </div>


</body>







































  <script type="text/javascript" src="\js\slider\src\nouislider.js">
  </script>

  <script>
  var range = document.getElementById('range');

noUiSlider.create(range, {

    range: {
        'min': 1300,
        'max': 3250
    },

    step: 150,

    // Handles start at ...
    start: [1450, 2050, 2350, 3000],

    // ... must be at least 300 apart
    margin: 300,

    // ... but no more than 600
    limit: 600,

    // Display colored bars between handles
    connect: true,

    // Put '0' at the bottom of the slider
    direction: 'rtl',
    orientation: 'vertical',

    // Move handle on tap, bars are draggable
    behaviour: 'tap-drag',

    // Show a scale with the slider
    pips: {
        mode: 'steps',
        stepped: true,
        density: 4
    }
});


</script>
