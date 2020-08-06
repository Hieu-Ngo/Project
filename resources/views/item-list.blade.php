<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/item-list.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.min.css" rel="stylesheet" src="">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>


  </head>
  <body>
    @include("header");

    <hr>

    <div class="mainpage clearfix">
      <aside class="sidebar">
        <div class="category">
            <div style="padding-left:5px; font-weight:bold; font-size:14px">CATEGORIES</div>
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
          <div id="slider" style="margin-bottom:20px;"> </div>


          <div class="input-price">
            <input type="text" name="min-value" placeholder="100" class="price-value"style="height:25px;">

            <input type="text" name="max-value" placeholder="1000"class="price-value" style="height:25px;" >
            <span style="background-color:lightgreen;padding:5px; color:white"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        <hr>
      </div>
      <div class="size">
        <div><span style="font-weight:bold">Size </span>
          <br>
        <div class="size-text" >XS</div>
        <div class="size-text" >S</div>
        <div class="size-text">M</div>
        <div class="size-text">L</div>
        <div class="size-text">SL</div>
        <div class="size-text">XL</div>
        <div class="size-text">XXL</div>
        </div>
        <br>
      </div>
      <div style="clear:both"></div>
      <div class="colors">
        <hr style="margin-top:8px;">

        <div style="padding-left:2px; font-weight:bold; font-size:14px;"> COLOR </ ></div>
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
        <div style="padding-left:5px; font-weight:bold; font-size:14px; margin-bottom:10px">TOP RATED</div>

        <div class="top-rated-content">
          <a href="/product-detail">
          <img src="image/1.png" alt="">
          </a>
          <div class="text-wrap">
          <div class="top-rated-text"> Casual man Wearing Cool Shoe        </div>
            <br>
           <div class="top-rated-price">$250.00
         </div>
       </div>
      </div>

      <div style="clear:both"></div>

      <div class="top-rated-content">
        <a href="/product-detail">
        <img src="image/2.png" alt="">
        </a>
        <div class="text-wrap">
        <div class="top-rated-text"> Casual man Wearing Cool Shoe        </div>
          <br>
         <div class="top-rated-price">$250.00
       </div>
     </div>
    </div>

    <div style="clear:both"></div>

    <div class="top-rated-content">
      <a href="/product-detail">
      <img src="image/3.png" alt="">
      </a>
      <div class="text-wrap">
      <div class="top-rated-text"> Casual man Wearing Cool Shoe        </div>
        <br>
       <div class="top-rated-price">$250.00
     </div>
   </div>
  </div>

  <div style="clear:both"></div>
<hr style="margin-top:30px">

<div class="promo">
  <img src="image/4.png" alt="">
</div>


      </aside>


      <div class="content">
        <div class="header">
          <span style="color:lightgrey; font-size:11px"> Showing 1-12 out of 14 result</span>
          <select class="" name="">
            <option value="">Sort by Name</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>

        </div>

<hr style="margin-right:10%">

        <div class="product-list">
        <div class="product-image-wrapper">
        <div class="product-image">

          <a href="/product-detail">
          <img src="image/5.png" alt="">
          </a>
        <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/6.png" alt="">
          </a>
        <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/7.png" alt="">
          </a>

        <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/8.png" alt="">
          </a>
        <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>

        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/1.png" alt="">
          </a>
          <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/2.png" alt="">
          </a>
        <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
           $250.00
        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/3.png" alt="">
          </a>
         <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/4.png" alt="">
          </a>

          <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="product-image-wrapper">
        <div class="product-image">
          <a href="/product-detail">
          <img src="image/5.png" alt="">
          </a>

           <div class="product-info">
          <div>
          <span>Crown Summit Backpack  </span>
          </div>
          <div>
          $250.00        </div>
        <div class="star-rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        </div>
        </div>
        </div>

        <div class="page-number">
          <hr>
          <div class="page">1    2    3    4    5    6  .  .
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <i class="fa fa-angle-double-right" aria-hidden="true"></i>

          </div>
          <hr>

      </div>
      </div>
    </div>

    <div style="clear:both; margin-bottom:30px;">

    </div>
  </div>

    <div  style="margin-left:15%; margin-right:15%;">
      <hr style=" margin-left: -300px;width:2000px">



    <div class="connect">
      <div class="connect-left">
        We deliver your dream Website.Stay connect with us
      </div>
      <div class="connect-right">
        <i class="fab fa-twitter fa-lg " style="margin-right:30px" ></i>
        <i class="fab fa-facebook fa-lg" style="margin-right:30px"></i>
        <i class="fab fa-instagram fa-lg"style="margin-right:30px"></i>
        <i class="fab fa-linkedin fa-lg"style="margin-right:30px"></i>
        <i class="fa fa-behance" aria-hidden="true" style="font-size:14px;"></i>


      </div>
    </div>


    <hr style=" margin-left: -300px;width:2000px">

    <div class="footer">
    <ul  style="margin: 0px 78px 0px 0px";
    >
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
     <li>
     <i class="fa fa-globe" aria-hidden="true"></i>
     <a href='' title='Link'>123 Your Address</a></li>
     <li><i class="fa fa-phone" aria-hidden="true"></i>
     <a href='' title='Link'>+121231231241</a></li>
     <li><i class="fa fa-envelope" aria-hidden="true"></i>
     <a href='' title='Link'><span style="color:lightGreen">email@emailaddress.com</a><span></li>
    </ul>
    </div>

    </div>


</body>



  <script type="text/javascript" src="\js\slider\src\nouislider.js">
  </script>

  <script>
  var slider = document.getElementById('slider');

noUiSlider.create(slider, {
    start: [20, 80],
    connect: true,
    range: {
        'min': 0,
        'max': 100
    }
});



</script>
