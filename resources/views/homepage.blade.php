<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow-y: scroll;
  overflow-x: hidden;
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

.slider
{
  width:1510px;
  height: 300px;
  float: left;

}

.slidesshow{
  width:1510px;
  height:300px;
}

.slideshow img{
  width:1510px;
  height:300px;
}


.text-over-image{
  position: absolute;
  top: 50%;
  left: 30%;
  transform: translate(-50%, -50%);
  color : lightGreen;
  padding-bottom:20px;
  text-align:left;
  z-index: 100;
}

.header-image {
  position: relative;
  display: inline-block;
  text-align: center;
  color: white;
  <font-size-adjust></font-size-adjust>;
  margin-bottom: 25px;

}

.header-image-small
{
    color= white;
    font-size: 7;
}

.product_img{
	width: 230px;
    height: 350px;
	float: left;
	overflow: hidden;
  margin-bottom: 5px;
}

.product_text
{
  font-size: 15px;
  margin-bottom: 5px;
}
 .best-seller {
      margin-top: 25px;
      width: 100%;
      float: left;
      height:auto;
  }
  .container
  {
    margin-top: 10px;
    width: 170 px;
    height: auto;
    float:left;
  }
  .product-one
  {
    margin-left: 50px;
    margin-top: 40px;
    margin-right: 30px;
    float: left;
    width: 300px;
    height: auto;
    border-radius: 7px;
    background-color: white;
    padding-bottom: 15px;
    border-bottom: 2px hidden darkgray;
    border-left: 1px hidden darkgray;
    border-right: 1px hidden darkgray;
  }


  .best-seller-text
  {
    width : 170 px;
    float :left;

  }
.product_two
{
  float: left;
  width: 250px;
  height: auto;
  border-radius: 7px;
  background-color: white;
  padding-bottom: 15px;
  border-bottom: 2px hidden darkgray;
  border-left: 1px hidden darkgray;
  border-right: 1px hidden darkgray;
  margin-right: 25px;
  margin-top: 10px;
}



.event_section{
  text-align: center;
	width: 100%;
	height: auto;
	float: left;
	margin-top: 50px;
  margin-left: 120px;

}

.event_section .event_one,
.event_section .event_two,
.event_section .event_three,
.event_section .event_four{
	width: 320px;
	height: auto;
	background-color:lightgrey;
	color: black;
	float: left;
  padding : 10px;
  margin-bottom: -10px;
}

.event-image
{
  display: inline-block;
  padding-left: 120px;
  margin-bottom: 50px;
}

.most-featured-text
{
  text-align: center;
}
.most-featured-item .product_one
{

  float: left;
  width: 250px;
  height: auto;
  border-radius: 7px;
  background-color: white;
  padding-bottom: 15px;
  border-bottom: 2px hidden darkgray;
  border-left: 1px hidden darkgray;
  border-right: 1px hidden darkgray;
  margin-right: 25px;
  margin-left: 50px;
  margin-top: 10px;

}


.footer-image-list
{
  float: left;
  display: inline-block;
  padding-left: -3px;
  position: relative;
  margin-bottom: 10px;
}


.connect
{
  width: 100%;
  display: inline-block;
}
.connect-left
{
  width: =60%;
  text-align: center;
  margin-left: 300px;
  display:inline;

}

.connect-right {
  width: 40%;
  display: inline;
  float:right;
}
.email-promo
{
  text-align: center;
  position:absolute;
  left: 12%;
  top:15%;
  color: white;
}

.footer {
 width: 1500px;
 float:center;
 text-align: center;
 margin-top: 40px;
}
.footer ul {
  display: inline-table;
  list-style: none;
  text-align: left;
  margin: 0px 25px 0px 25px;
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


<div class="header-image">
    <div class="slider">
      <div class="container">
        <div class="slideshow">
          <img src="image/black rectangle.jpg" alt="Girl in a jacket" width= 100%, height=400>
          <img src="image/white rectangle.jpg" alt="Girl in a jacket" width= 100%, height=400>
          <img src="image/red rectangle.png" alt="Girl in a jacket" width= 100%, height=400>
        </div>
      </div>
    </div>
    <div class="text-over-image">
        <h1>THE BEST</h1>
        <h1>WOOCOMMERCE</h1>
        <p>Lorem ipsum dolor sit amet, consecte</p>
        <p>tur adipiscing elit. Ut condimentum pha</p>
        <a  href="#Buy Now">  <span style="border: 1px solid grey;font-size=10px;color:grey;padding: 2px"> BUY NOW </span></a>
    </div>
    </div>

</div>


<div class="best-seller">
    <div class="container">
        <div class="product-one">
            <div class="best-seller-text">
            <h3> Best Seller </h3>
            <p style="font-size:10px; color:lightgreen"><i>Duis pretium sit amet ex ut porttitor. Vestibulum</i><p>
            <p style="font-size:14px">Nulla vel auctor dolor. Duis dictum, arcu a porttitor faucibus, augue dui gravida augue, ut suscipit leo ligula sit amet nibh. Praesent nec nibh ac turpis semper convallis. Praesent ipsum neque</p>

            </div>
        </div>


        <div class="product_two">
				<div class="product_img">
					<img src="image/black rectangle.jpg">
				</div>
				<div class="product_text">
					<h4>Cruise Duo Analog</h4>
				</div>
        <div class="product_price">
					<div class="price">
						$254.99
				</div>
        </div>
				<div class="star_rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
			</div>

      <div class="product_two product_three">
      <div class="product_img">
        <img src="image/black rectangle.jpg">
      </div>
      <div class="product_text">
        <h4>Cruise Duo Analog</h4>
      </div>
      <div class="product_price">
        <div class="price">
          $1054.99
      </div>
      </div>
      <div class="star_rating">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
      </div>
    </div>

    <div class="product_two product_four">
    <div class="product_img">
      <img src="image/black rectangle.jpg">
    </div>
    <div class="product_text">
      <h4>  Purse</h4>
    </div>
    <div class="product_price">
      <div class="price">
        $254.99
    </div>
    </div>
    <div class="star_rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>
  </div>

  <div class="product_two product_five">
  <div class="product_img">
    <img src="image/black rectangle.jpg">
  </div>
  <div class="product_text">
    <h4>Hermes</h4>
  </div>
  <div class="product_price">
    <div class="price">
      $192.99
  </div>
  </div>
  <div class="star_rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
  </div>
  </div>

    </div>
</div>

<div class="event_section">
  <div class="container">
    <div class="event_one">
      <i class="fa fa-rocket fa-lg" aria-hidden="true"></i>
      <h3>Fastest Shipping</h3>
      <p>2 Days Express</p>
    </div>
    <div class="event_two">
      <i class="fa fa-paper-plane fa-lg" aria-hidden="true"></i>
      <h3>Free Shipping</h3>
      <p>With oder over 99$</p>
    </div>

    <div class="event_three">
      <i class="fa fa-recycle fa-lg" aria-hidden="true"></i>
      <h3>30 Days Return</h3>
      <p>Shop Big Save Big</p>
    </div>
    <div class="event_four">
      <i class="fa fa-diamond fa-lg" aria-hidden="true" ></i>
      <h3>Special Offers</h3>
      <p>Shop Big Save Big</p>
    </div>
  </div>
</div>

<div class="event-image">
  <div class="container">
  <div class="promo-event-image">
      <img src="image/black rectangle.jpg" alt="Offer1" width="424 px" height=400px>
      <img src="image/white rectangle.jpg" alt="Offer2" width="424 px" height=400px>
      <img src="image/red rectangle.png" alt="Offer3" width="  424  px" height=400px>
  </div>

  </div>
</div>

<div class="most-featured-text",style=" margin-bottom=20px">
      <p style="font-size:20px ; color :black; margin-bottom:-8px">  <b> FEATURED PRODUCTS</b></p>
      <p style="font-size:10px; color: lightGreen;font-style: italic;"> The newest trend from top brand</p>
</div>

<div class="most-featured-item">

  <div class="product_one">
  <div class="product_img">
    <img src="image/black rectangle.jpg">
  </div>
  <div class="product_text">
    <h4>Hermes</h4>
  </div>
  <div class="product_price">
    <div class="price">
      $192.99
  </div>
  </div>
  <div class="star_rating">
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star" aria-hidden="true"></i>
              <i class="fa fa-star-o" aria-hidden="true"></i>
  </div>


</div>

<div class="product_two">
<div class="product_img">
  <img src="image/black rectangle.jpg">
</div>
<div class="product_text">
  <h4>Hermes</h4>
</div>
<div class="product_price">
  <div class="price">
    $192.99
</div>
</div>
<div class="star_rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
</div>


</div>

<div class="product_two">
<div class="product_img">
  <img src="image/black rectangle.jpg">
</div>
<div class="product_text">
  <h4>Hermes</h4>
</div>
<div class="product_price">
  <div class="price">
    $192.99
</div>
</div>
<div class="star_rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
</div>
</div>

<div class="product_two">
<div class="product_img">
  <img src="image/black rectangle.jpg">
</div>
<div class="product_text">
  <h4>Hermes</h4>
</div>
<div class="product_price">
  <div class="price">
    $192.99
</div>
</div>
<div class="star_rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
</div>
</div>

<div class="product_two">
<div class="product_img">
  <img src="image/black rectangle.jpg">
</div>
<div class="product_text">
  <h4>Hermes</h4>
</div>
<div class="product_price">
  <div class="price">
    $192.99
</div>
</div>
<div class="star_rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
</div>

</div>
</div>

<br>

<div class="most-featured-item" >

<div class="product_one">
<div class="product_img">
  <img src="image/black rectangle.jpg">
</div>
<div class="product_text">
  <h4>Hermes</h4>
</div>
<div class="product_price">
  <div class="price">
    $192.99
</div>
</div>
<div class="star_rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
</div>


</div>

<div class="product_two">
<div class="product_img">
<img src="image/black rectangle.jpg">
</div>
<div class="product_text">
<h4>Hermes</h4>
</div>
<div class="product_price">
<div class="price">
  $192.99
</div>
</div>
<div class="star_rating">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
</div>


</div>

<div class="product_two">
<div class="product_img">
<img src="image/black rectangle.jpg">
</div>
<div class="product_text">
<h4>Hermes</h4>
</div>
<div class="product_price">
<div class="price">
  $192.99
</div>
</div>
<div class="star_rating">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
</div>


</div>

<div class="product_two">
<div class="product_img">
<img src="image/black rectangle.jpg">
</div>
<div class="product_text">
<h4>Hermes</h4>
</div>
<div class="product_price">
<div class="price">
  $192.99
</div>
</div>
<div class="star_rating">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
</div>
</div>

<div class="product_two">
<div class="product_img">
<img src="image/black rectangle.jpg">
</div>
<div class="product_text">
<h4>Dior</h4>
</div>
<div class="product_price">
<div class="price">
  $192.99
</div>
</div>
<div class="star_rating">
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star" aria-hidden="true"></i>
          <i class="fa fa-star-o" aria-hidden="true"></i>
</div>

</div>


<div class="email-footer">
  <div class=container>
    <div class = "footer-image-list">
      <img src="image/black rectangle.jpg" width="730px" height="170px">
      <div class="email-promo" >
        <h3> GET OUR SPECIAL DISCOUNT</h3>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </h6  >
        <input type="submit"value="Get  Coupon Now" style="float: right" />
        <div style="overflow: hidden; padding-right: .5em;">
        <input type="text" style="width: 300px;" placeholder="Your email" />
</div>
      </div>
      <img src="image/red rectangle.png" alt="Offer1" width="170 px" height=170px>
      <img src="image/black rectangle.jpg" alt="Offer2" width="170 px" height=170px>
      <img src="image/red rectangle.png" alt="Offer3" width="  170  px" height=170px>
      <img src="image/black rectangle.jpg" alt="Offer2" width="170 px" height=170px>

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
  <hr>
</div>


<div class="footer">
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
 <li><a href='' title='Link'><span style="color=lightGreen">email@emailaddress.com</a><span></li>
</ul>
</div>




<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/jquery.cycle.all.js"></script>
<script> $('.slideshow').cycle({
    fx:    'zoom',
    sync:  false,
    delay: -2000
});
</script>
</body>




</html>
