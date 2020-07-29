<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product-page</title>
    <link rel="stylesheet" type="text/css" href="css/product-css.css">
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
<div class="main-page">
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Page</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Shop</a> <i class="fa fa-chevron-right" aria-hidden="true"></i>
        <a href="#">Product</a>
    </div>


    <div class="product-info">
        <div class="product-info-image">
            <img src="image/vertical rectangle.jpg" >
        </div>
        <div class="product-info-text">
          <h2>This Is The Product Name </h2>
          <span style="color: lightGreen; margin-left:5px; font-size: 22px"> $ 250.00         </span>
          <span>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
          </span>
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at ultricies arcu, eu hendrerit est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet diam ac dolor ornare lobortis. Integer vel rhoncus ex. Ut posuere luctus mollis. </p>

          <hr style="color: lightgrey">
          <br>
          <select name="size"  form="orderform" style="width: 48%;float:left;height:25px;margin-bottom:25px">
            <option value ="Size"> Choose your size </option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>

          <select name="size"  form="orderform" style="width: 48%;float:right;height:25px; margin-bottom:25px">
            <option value ="Size"> Color </option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
          <input  type="number"  value="1" min="1" max="100" step="1"/>
          <br>
          <div class="cart-container">
            <div class="cart">
              <i class="fa fa-shopping-cart style" aria-hidden="true"></i> Add to Cart
            </div>
            <div class="icon">
              <i class="fa fa-heart-o" aria-hidden="true" style="border:1px solid grey; padding:10px"></i>
              <i class="fa fa-heart-o" aria-hidden="true"style="border:1px solid grey;padding:10px"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="thumbnail-carousel">
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

      <div class="related-product-text">
          <div class="text">
            <strong>Related Product </strong>
          </div>  











</div>
<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
<script src="js/bootstrap-input-spinner-master/src/bootstrap-input-spinner.js"></script>

<script>
$("input[type='number']").inputSpinner();
</script>

<script>


</script>

  </body>
</html>
