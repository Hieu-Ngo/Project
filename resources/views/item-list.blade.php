<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/item-list.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.0/nouislider.min.css" rel="stylesheet" src="">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.typekit.net/eti4jqa.css" type="text/css">


  </head>
  <body>
    @include("header");
    <hr>
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Page</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Shop</a> <i class="fas fa-angle-double-right"></i>
        <a href="#" style="color:#3cb878">Cart</a>
    </div>

    <div class="mainpage clearfix">
      <div class="sidebar">
        <div class="category">
            <h4>CATEGORIES</h4>
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
          <h4>PRICE FILTER</h4>

          <div id="slider" style="margin-bottom:20px;"> </div>


          <div class="input-price">
            <input type="text" name="min-value" placeholder="$100" class="price-value">

            <input type="text" name="max-value" placeholder="$1000"class="price-value" >
            <span style="background-color:#3cb878;padding:9px; color:white; font-size: 16px"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        <hr>
      </div>
      <div class="size">
        <h4>SIZE </h4>
          <br>
        <a href="#"><div class="size-text" >XS</div></a>
        <a href="#" ><div class="size-text" style="background-color:#3cb878" >S</div></a>
        <a href="#"><div class="size-text" >M</div></a>
        <a href="#"><div class="size-text" >L</div></a>
        <a href="#"><div class="size-text" >XL</div></a>
        <a href="#"><div class="size-text" >XXL</div></a>
        <a href="#"><div class="size-text" >XXL</div></a>
        </div>
        <br>
      <div style="clear:both"></div>
      <div class="colors">
        <hr style="margin-top:8px;">

        <h4> COLOR </h4>
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
          <input type="checkbox" >
          <label class="container">Yellow
              <span class="checkmark"></span>
            </label>
          </div>
        </div>


      </div>
      <hr>
      <div class="top-rated">
        <h4>TOP RATED</h4>

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


</div>
</div>

      <div class="content">
        <div class="search-bar">
          <span style="font-size: 14px;letter-spacing: 0px;color: #777777;font-weight: 400;font-family: "Roboto";"> Showing 1-12 out of 14 result</span>
          <select class="" name="">
            <option value="">Sort by Name</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>

        </div>

<hr style="margin-right:15px">

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

    <div style="clear:both; margin-bottom:140px;">

    </div>
  </div>


@include("footer")


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
