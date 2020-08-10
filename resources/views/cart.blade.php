<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>checkout-page</title>
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <script src="https://kit.fontawesome.com/ac206ac257.js" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.typekit.net/eti4jqa.css" type="text/css">



  </head>
  @include("header");



    <hr >
    <div class="directory-bar">
        <a href="#">Home</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Page</a> <i class="fas fa-angle-double-right"></i>
        <a href="#">Shop</a> <i class="fas fa-angle-double-right"></i>
        <a href="#" style="color:#3cb878">Cart</a>
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
                    <img src="image/2.png" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
          		<td class="color-style">
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
          		<td>
                <input type="text" name="" value="" placeholder="1" >
              </td>
              <td>$120</td>
              <td>
                <div style="float:left; margin-left:15px;">$120</div>
                <div style="float:right"><a href="#"><i class="far fa-times-circle"></i></a></div>
            </td>



          	</tr>
            <tr>
              <td>
                <div class="cart-item">
                  <div class="cart-item-image">
                    <img src="image/8.png" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
              <td class="color-style">
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
              <td>
                <input type="text" name="" value="" placeholder="1" >
              </td>
              <td>$120</td>
              <td>
                <div style="float:left; margin-left:15px;">$120</div>
                <div style="float:right"><a href="#"><i class="far fa-times-circle"></i></a></div>
            </td>


            </tr>



            <tr>
              <td>
                <div class="cart-item">
                  <div class="cart-item-image">
                    <img src="image/6.png" alt="">
                  </div>
                  <div class="cart-item-text">
                    Casual man wearing cool shoes
                  </div>
                </div>
              </td>
              <td class="color-style">
                <div style="text-align:left">
                  Size:XL
                </div>
                <div style="text-align:left">
                  Color: Black
                </div>
              </td>
              <td>
                <input type="text" name="" value="" placeholder="1" >
              </td>
              <td>$120</td>
              <td>
                <div style="float:left; margin-left:15px;">$120</div>
                <div style="float:right"><a href="#"><i class="far fa-times-circle"></i></a></div>
            </td>
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
          <input type="text" class="coupon-input"name="coupon" placeholder="Enter your coupon here">
          <button type="button"  class="apply-button" name="button">APPLY</button>
        </div>
        <div class="shipping">
          <h5><strong>SHIPPING AVAILABILITY </STRONG></H5>
            <div class="caption">Select Country</div>
            <div class="select">
                <select >
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
                <select >
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
          <input type="number" name="" placeholder="Postcode/Zip" >

        <div class="update-detail" style="margin-top:10px">
          <button type="button" name="button" class="update-button" > UPDATE TOTALS</button>

        </div>


      </div>
    </div>

    <div class="mainpage-right">
        <div class="discount-code">
          <h5><strong>USE GIFT VOUCHER </strong></h5>
          <div class="caption">Enter Your Gift Voucher Here</div>
          <input type="text" class="coupon-input"name="coupon" placeholder="Enter your gift voucher code here">
          <button type="button"  class="apply-button" name="button">APPLY</button>
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
          <button type="button"  id="checkout"class="checkout-button" name="button" onclick="window.location.href='/checkout'" >PROCESSED TO CHECKOUT</button>

      </div>

      </div>
      <div style="clear:both; margin-bottom:150px;">

      </div>
    </div>
      @include("footer")
