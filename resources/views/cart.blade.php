<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>


  </head>
  <body>
    <div class="header" >
      <div class ="header-left">
        <a href="/homepage" class="homepage"><span style="color: lightgreen; font-size=px">Renoshop</span>Bee</a>
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
        <a href="#"><span style="color:lightgreen">Cart</span></a>
    </div>

    <div class="mainpage">
      <div class="cart-table">
        <table class="table-item" id="cart" style="width:100%">
          	<thead>
          	<tr>
          		<th class="cell-styling"style="width:35%">Product</th>
          		<th  class="cell-styling"style="width:15%">Color & Size</th>
          		<th  class="cell-styling"style="width:10%">Quantity</th>
          		<th  class="cell-styling"style="width:15%">Price</th>
          		<th  class="cell-styling"style="width:15%">Total</th>
          	</tr>
          	</thead>
          	<tbody>
          	<tr>
          		<td>
                <div class="cart-item">
                  <div class="cart-item-image">
                    <img src="image/vertical rectangle.jpg" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
          		<td>
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
          		<td>
                <input type="text" name="" value="" placeholder="1" style="width:25%">
              </td>
              <td>$120</td>
              <td>$120</td>


          	</tr>
            <tr>
              <td>
                <div class="cart-item">
                  <div class="cart-item-image">
                    <img src="image/vertical rectangle.jpg" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
              <td>
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
              <td>
                <input type="text" name="" value="" placeholder="1" style="width:25%">
              </td>
              <td>$120</td>
              <td>$120</td>


            </tr>



            <tr>
              <td>
                <div class="cart-item">
                  <div class="cart-item-image">
                    <img src="image/vertical rectangle.jpg" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
              <td>
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
              <td>
                <input type="text" name="" value="" placeholder="1" style="width:25%">
              </td>
              <td>$120</td>
              <td>$120</td>
            </tr>

            <tr>
              <td colspan="5" style="text-align:right">
                <button type="button" id="update-cart"name="button">UPDATE CART</button>
                <button type="button" id="continue"name="button">CONTINUE SHOPPING</button>
              </td>
            </tr>
          	</tbody>
          </table>

      </div>

      <div class="mainpage-left">
        <div class="discount-code">
          <h5><strong>USE YOUR COUPON CODE </strong></h5>

          <div class="caption">Enter Your Coupon Here</div>
          <input type="text" class="coupon-input"name="coupon" style="width:80%"placeholder="Enter your coupon here">
          <button type="button"  class="apply-button" name="button">Apply</button>
        </div>
        <div class="shipping">
          <h5><strong>SHIPPING AVAILABILITY </STRONG></H5>
            <div class="caption">Select Country</div>
            <div class="select">
                <select style="width:100%; height: 25px">
                  <option value="0">Viet Nam</option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
              </div>
        </div>

        <div class="shipping">
            <div class="caption">Select State</div>
            <div class="select">
                <select style="width:100%; height: 25px">
                  <option value="0">Ha Noi</option>
                  <option value="1">Audi</option>
                  <option value="2">BMW</option>
                  <option value="3">Citroen</option>
                  <option value="4">Ford</option>
                  <option value="5">Honda</option>
                  <option value="6">Jaguar</option>
                  <option value="7">Land Rover</option>
                  <option value="8">Mercedes</option>
                  <option value="9">Mini</option>
                  <option value="10">Nissan</option>
                  <option value="11">Toyota</option>
                  <option value="12">Volvo</option>
                </select>
              </div>
        </div>

        <div class="shipping">
          <div class="caption">Postcode/Zip </div>
          <input type="number" name="" placeholder="Postcode/Zip" style="width:98%; height:20px">

        <div class="update-detail" style="margin-top:10px">
          <button type="button" name="button" style="width:25%;height:20px; background-color:white; border: 1px solid"> UPDATE TOTALS</button>

        </div>


      </div>
    </div>

    <div class="mainpage-right">
        <div class="discount-code">
          <h5><strong>USE YOUR GIFT VOUCHER </strong></h5>
          <div class="caption">Enter Your Gift Voucher Here</div>
          <input type="text" class="coupon-input"name="coupon" style="width:80%"placeholder="Enter your gift voucher code here">
          <button type="button"  class="apply-button" name="button">Apply</button>
        </div>

      <div class="shopping-cart-calculation">
        <h5><strong>SHOPPING CART CALCULATION </STRONG></H5>
          <div class="container">
            <div class="container-item">
              <span style="text-align: left">Subtotal </span>
              <span style ="float: right">$450  </span>
            </div>
            <div class="container-item">
              <span style="text-align: left">Coupon </span>
              <span style ="float: right">-$50  </span>
            </div>
            <div class="container-item">
              <span style="text-align: left">Shipping </span>
              <span style ="float: right">Free Shipping  </span>
            </div>
          </div>

          <div class="container">
            <div class="container-item">
              <span style="text-align: left">Total </span>
              <span style ="float: right">$400  </span>
            </div>
          </div>
          <button type="button" class="checkout-button" name="button" onclick="window.location.href='/checkout'" >PROCESSED TO CHECKOUT</button>

      </div>

      </div>
      <div style="clear:both">

      </div>
      <div class="footer">
      <div class="connect">
        <hr>

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


      </div>

      <div class="info-page">
      <ul style="margin-left:0px;">
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

      </div>
    </div>
