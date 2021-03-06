<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product-page</title>
    <link rel="stylesheet" type="text/css" href="css/item-detail.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.typekit.net/eti4jqa.css" type="text/css">






  </head>
  <body>
    @include("header");
    <div style="margin-top:-33px;">
    <hr>
  </div>
<div class="main-page">
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Page</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Shop</a> <i class="fas fa-angle-double-right"></i>
        <a href="#" style="color:#3cb878">Product</a>
    </div>


    <div class="product-info">
        <div class="product-info-image">
          <div>
            <img src="image/2.png" >
          </div>
        <div id="sync1" class="owl-carousel">
          <div class="item">
            <img src="image/4.png" alt="">
          </div>
          <div class="item">
            <img src="image/6.png" alt="">
          </div>
          <div class="item">
            <img src="image/8.png" alt="">
          </div>
        </div>



      </div>



      <div class="product-info-text">
        <h2>This Is The Product Name </h2>
        <h3> $ 250.00  </h3>
        <span >
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
        <br>
        <p >Etiam at ultricies arcu, eu hendrerit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet diam ac dolor ornare lobortis. Integer vel rhoncus ex. Ut posuere luctus mollis. </p>

        <hr style="color: lightgrey">
        <br>
        <select name="size"  class="attribute-select"form="orderform" >
          <option value ="Size"> Choose your size </option>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>

        <select name="size" class="attribute-select" form="orderform" >
          <option value ="Size"> Color </option>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
      <div style="clear:both"> </div>
      <div class="spinner">
        <input  type="number"  value="1" min="1" max="100" step="1"/>
      </div>
        <br>
        <div class="cart-container clearfix">
          <div class="cart">
          <a href="#"> <span style="  font-size: 14px; color:white;  font-weight: 400;"><i class="fa fa-shopping-cart style" aria-hidden="true"></i> ADD TO CART</span></a> 
          </div>
          <div class="icon">
          <a href="#">  <span><i class="fa fa-heart-o" aria-hidden="true" ></i></span></a>

            <a href=""><span><i class="fas fa-sync-alt"></i> </span></a>
          </div>
        </div>
      </div>
    </div>

      <div style="clear:both"></div>

      <div class="review-description">
        <div class="title">
          <div class="description">
            <a href="#"> Description </a>
          </div>
          <div class="review">
            <a href="#"> Review(2) </a>
          </div>
        </div>
        <div class="description-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum metus sollicitudin nunc eleifend viverra. Etiam enim sem, luctus non volutpat at, maximus a nisl. Nullam nec magna sed nulla commodo posuere. Phasellus ut hendrerit neque, sed luctus felis. Phasellus lacinia ut arcu non viverra. Praesent bibendum scelerisque leo, at commodo lorem aliquam eu. Nullam vestibulum a orci non maximus. Fusce feugiat in orci ac pharetra. Cras ullamcorper pellentesque urna, at porttitor mauris semper vel. Fusce sit amet varius neque, non fringilla ante.<br>
          Pellentesque ultricies elit id ullamcorper interdum. Vestibulum varius augue non turpis viverra tempus. Donec at congue massa, vitae tempor nibh. Nulla venenatis congue turpis, a condimentum est aliquam ac. Quisque non metus mauris. Donec sollicitudin convallis ornare. Morbi volutpat semper sapien. Suspendisse lacus lectus, rutrum non vulputate et, fringilla eget lorem. Nunc congue vestibulum arcu et sodales. Suspendisse dictum finibus dignissim. Nunc sodales ipsum est, id tempus nisl vulputate nec. Ut non libero ultrices, pulvinar nisl eu, rhoncus quam.
        </div>
      </div>
      <div style="clear:both"></div>

      <div class="related-product-text">
        <div class="related-product-header">

          <div class="text">
            <strong>Related Product </strong>
          </div>
          <div class="arrow">
            <div class="arrow-icon">
              <a href="">
              <i class="fa fa-long-arrow-right " style="color:white" aria-hidden="true"></i>
              </a>

            </div>
            <div class="arrow-icon">
              <a href="">
              <i class="fa fa-long-arrow-left" style="background-color:#f5f6f9"aria-hidden="true"></i>
              </a>
            </div>
        </div>
      </div>
        <br>
        <br>
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
</div>

<div style="clear:both; margin-bottom:150px;">

</div>
</div>

@include("footer")

</div>


<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/bootstrap-input-spinner-master/src/bootstrap-input-spinner.js"></script>

<script>
$("input[type='number']").inputSpinner();
</script>

<script>
$(document).ready(function() {

    var sync1 = $("#sync1");
    var sync2 = $("#sync1");
    var slidesPerPage = 4; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 3,
        slideSpeed: 2000,
        nav: true,
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
        navText:false
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: true,
            nav: true,
            smartSpeed: 200,
            slideSpeed: 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate: 100
        }).on('changed.owl.carousel', syncPosition2);

    function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;

        //if you disable loop you have to comment this block
        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
            sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
            sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
    }

    function syncPosition2(el) {
        if (syncedSecondary) {
            var number = el.item.index;
            sync1.data('owl.carousel').to(number, 100, true);
        }
    }

    sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
    });
});

</script>

  </body>
</html>
