<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product-page</title>
    <link rel="stylesheet" type="text/css" href="css/item-detail.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>


  </head>
  <body>
    @include("header");

    <hr style="color:lightgrey; height:50%;">
<div class="main-page">
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Page</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Shop</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Product</a>
    </div>


    <div class="product-info">
        <div class="product-info-image">
          <div>
            <img src="image/vertical rectangle.jpg" >
          </div>
        <div id="sync1" class="owl-carousel">
          <div class="item">
            <img src="image/vertical rectangle.jpg" alt="">
          </div>
          <div class="item">
            <img src="image/vertical rectangle.jpg" alt="">
          </div>
          <div class="item">
            <img src="image/vertical rectangle.jpg" alt="">
          </div>
        </div>



      </div>



      <div class="product-info-text">
        <h2>This Is The Product Name </h2>
        <span style="color: lightGreen; margin-left:5px; margin-right: 5px;font-size: 22px"> $ 250.00  </span>
        <span style="font-size:10px;color:orange">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
        </span>
        <br>
        <p style="margin-right: 30%; font-size:12px;">Etiam at ultricies arcu, eu hendrerit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet diam ac dolor ornare lobortis. Integer vel rhoncus ex. Ut posuere luctus mollis. </p>

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
            <span style="color:white"><i class="fa fa-shopping-cart style" aria-hidden="true"></i> Add to Cart</span>
          </div>
          <div class="icon">
            <i class="fa fa-heart-o" aria-hidden="true" style="border:1px solid lightgrey; padding:10px  ;"></i>
            <i class="fa fa-heart-o" aria-hidden="true"style="border:1px solid lightgrey;padding:10px "></i>
          </div>
        </div>
      </div>
    </div>

      <div style="clear:both"></div>

      <div class="review-description">
        <div class="title">
          <div class="description">
             Description
          </div>
          <div class="review">
             Review
          </div>
        </div>
        <div class="description-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum metus sollicitudin nunc eleifend viverra. Etiam enim sem, luctus non volutpat at, maximus a nisl. Nullam nec magna sed nulla commodo posuere. Phasellus ut hendrerit neque, sed luctus felis. Phasellus lacinia ut arcu non viverra. Praesent bibendum scelerisque leo, at commodo lorem aliquam eu. Nullam vestibulum a orci non maximus. Fusce feugiat in orci ac pharetra. Cras ullamcorper pellentesque urna, at porttitor mauris semper vel. Fusce sit amet varius neque, non fringilla ante.<br>
          Pellentesque ultricies elit id ullamcorper interdum. Vestibulum varius augue non turpis viverra tempus. Donec at congue massa, vitae tempor nibh. Nulla venenatis congue turpis, a condimentum est aliquam ac. Quisque non metus mauris. Donec sollicitudin convallis ornare. Morbi volutpat semper sapien. Suspendisse lacus lectus, rutrum non vulputate et, fringilla eget lorem. Nunc congue vestibulum arcu et sodales. Suspendisse dictum finibus dignissim. Nunc sodales ipsum est, id tempus nisl vulputate nec. Ut non libero ultrices, pulvinar nisl eu, rhoncus quam.
        </div>
      </div>
      <div style="clear:both"></div>

      <div class="related-product-text">
          <div class="text">
            <strong>Related Product </strong>
          </div>
          <div class="arrow">
            <div class="arrow-left">
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

            </div>
            <div class="arrow-right">
              <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            </div>
        </div>
        <br>
        <br>
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
        <img src="image/vertical rectangle.jpg" alt="">
      <div class="product-info">
        <div>
        <span><strong>Crown Summit Backpack </strong> </span>
        </div>
        <div>
        <span style="color:lightGreen"> $250.00 </span>
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
    <img src="image/vertical rectangle.jpg" alt="">
  <div class="product-info">
    <div>
    <span><strong>Crown Summit Backpack </strong> </span>
    </div>
    <div>
    <span style="color:lightGreen"> $250.00 </span>
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
  <img src="image/vertical rectangle.jpg" alt="">
<div class="product-info">
  <div>
  <span><strong>Crown Summit Backpack </strong> </span>

  </div>
  <div>
  <span style="color:lightGreen"> $250.00 </span>
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
</div>

<div style="clear:both; margin-bottom:150px;">

</div>

<div >
<hr>
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

<hr>


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
