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
    @include("header");

    <div class="main-page">
      <div class="info">
    <div class="billing-detail">
      <strong>BILLING DETAILS </strong>
    </div>
    <div class="col-50" style="margin-right:65px;">
      <div class="caption"> First Name<span style="color:red"> * </span> </div>
      <div class="input-50">
        <input type="text" name="" value="" >
      </div>

    </div>

    <div class="col-50" >
      <div class="caption"> Last Name<span style="color:red"> * </span> </div>
      <div class="input-50">
        <input type="text" name="" value="" >
      </div>

    </div>
    <div style="clear:both">
    </div>

    <div class="col-100">
      <div class="caption"> Country<span style="color:red"> * </span> </div>
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

    <div class="col-100">
      <div class="caption"> Company Name </div>
      <div class="input-100">
        <input type="text" name="" value="">
    </div>
  </div>

    <div class="col-100">
      <div class="caption"> Address <span style="color:red"> * </span> </div>
      <div class="input-100">
        <input type="text" name="" placeholder="Street Address">
    </div>
  </div>

    <div class="col-100">
      <div class="caption"> Postcode/Zip </div>
      <div class="input-100">
        <input type="text" name="" placeholder="Postcode/Zip">
    </div>
  </div>

    <div class="col-100">
      <div class="caption"> Town/City<span style="color:red"> * </span> </div>
      <div class="input-100">
        <input type="text" name="" placeholder="Town/City">
    </div>
  </div>

    <div class="col-50"  style=" margin-right: 65px;">
      <div class="caption"> Email<span style="color:red"> * </span> </div>
      <div class="input-50">
        <input type="text" name="" value="" >
      </div>

    </div>

    <div class="col-50" >
      <div class="caption"> Phone<span style="color:red"><span style="color:red"> * </span> </span></div>
      <div class="input-50">
        <input type="text" name="" value="" >
      </div>

    </div>
    <div style="clear:both">
    </div>

    <div >
      <input type="checkbox" name="" value=""> <span style="font-size:10px; vertical-align: center;">Create an account ?</span>
    </div>


</div>

<div class="billing">
  <h5 style="padding:5px"> YOUR ORDER </h5>
  <div class="container">
    <div class="container-item">
      <span style="text-align: left">Product </span>
      <span style ="float: right">Total  </span>
      <hr style="width:410px;">
    </div>
</div>

<div class="container">
  <div class="container-item "style="margin-top:30px">
    <span style="text-align: left; ">Casual man wearing cool shoe x 1 </span>
    <span style ="float: right">$120  </span>
  </div>
</div>


<div class="container">
  <div class="container-item"style="margin-bottom:30px">
    <span style="text-align: left">Casual men wearing x 2 </span>
    <span style ="float: right">$280  </span>
    <hr style="width:410px;">
  </div>
</div>

<div class="container">
  <div class="container-item"style="margin-top:30px">
    <span style="text-align: left">Subtotal </span>
    <span style ="float: right">$ 400  </span>
  </div>
</div>


<div class="container">
  <div class="container-item"style="margin-bottom:30px">
    <span style="text-align: left">Shipping </span>
    <span style ="float: right">Free Shipping  </span>
    <hr style="width:410px;">
  </div>
</div>

<div class="container">
  <div class="container-item">
    <span class="total"><strong>Total</strong> </span>
    <span class="total" style="float:right; margin-bottom:30px " ><strong>$400 </strong> </span>
  </div>
</div>

<hr style="margin-top:30px; margin-left: -30px;width: 443px;">

<div class="container" style="letter-spacing: 1px; ">
 <div class="checkbox-text"><input type="checkbox" name="" value=""> Direct Bank Transfer</div>
 <div class="bank-text">  Vivamus consequat mi ac elementum pharetra. Suspendisse ullamcorper arcu et est imperdiet bibendum. Aliquam nec ipsum convallis, sollicitudin justo et, tempor arcu</div>
 <div class="checkbox-text"><input type="checkbox" name="" value=""> Cheque Order</div>
 <div class="checkbox-text"><input type="checkbox" name="" value=""> Paypal</div>
</div>

</div>
<div class="checkout-button">
<button type="button" name="button">PLACE ORDER</button>

</div>

</div>
<div style="clear:both; margin-bottom:150px;">

</div>

@include("footer")
