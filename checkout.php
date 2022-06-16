<?php include("navBarIndex.php"); ?>
<br>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="checkout.css">
</head>
    <body id="body">   
       <div class="row">
          <div class="col-75">
            <div class="container">
              <form name="myForm" action="checkout_con.php" method="post" onsubmit="return validate();">
                <div class="row">
                  <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="firstname"><i class="fa fa-user"></i> First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Emma" />
                    <label for="lastname"><i class="fa fa-user"></i> Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Rasyid"/>
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="emma@example.com"/>
                    <label for="adr"><i class="fas fa-address-card"></i> Address</label>
                    <input type="text" id="adr" name="address" placeholder="No. 123, Lot 8745, Kampung Baru" autocapitalize="off"/>               
                    <label for="city"><i class="fas fa-building"></i> City</label>
                    <input type="text" id="city" name="city" placeholder="Kuching"/>                    
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" placeholder="Sarawak"/>   
                  </div>

                  <div class="col-50">
                      <h3>Payment</h3>
                      <label for="fname">Accepted Cards</label>
                      <div class="icon-container">
                        <i class="fab fa-cc-visa" style="color: navy;"></i>
                        <i class="fab fa-cc-amex" style="color: blue;"></i>
                        <i class="fab fa-cc-mastercard" style="color: red;"></i>
                        <i class="fab fa-cc-discover" style="color: orange;"></i>
                      </div>
                      <label for="cname">Name on Card</label>
                      <input type="text" id="cardname" name="cardname" placeholder="Emma Binti Rasyid"/>
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444"/>
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="January"/>
                      <div class="row">
                        <div class="col-1">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="2022" />
                        </div>
                        <div class="col-2">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cardcvv" placeholder="XXX" />
                        </div>
                      </div>
                  </div>       
                </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue and Print receipt" class="btn">
      </form>
    </div>
  </div>
</div>
    <script type="text/javascript" src="checkout.js"></script><br><br><br>
    
    <section class="footer">
        <footer class="f">
            <a href="index.html"><img src="img/lingscars-logo.png"></a>           
            <p> Company Reg No: 6178634 || VAT No: 866 0241 30 <br>
                @ Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.</p>
        </footer>
    </section>
   
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
  </body>
</html>