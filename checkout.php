<?php 
  include("connection.php"); 

  if(!isset($_SESSION['userID'])){
      echo '<script type="text/javascript">alert("You need to log in or register first before making your payment..");window.location="login/login.html";</script>';
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/checkout.css">
  </head>
  <body>
    <?php include("navbar.php"); ?>

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
                      <!--input type="text" id="expmonth" name="expmonth" placeholder="January"/-->
                      <select id="expmonth" name="expmonth">
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April">April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="Octoner">Octoner</option>
                          <option value="November">November</option>
                          <option value="December">December</option>
                      </select>
                      <div class="row">
                        <div class="col-1">
                          <label for="expyear">Exp Year</label>
                          <!--input type="text" id="expyear" name="expyear" placeholder="2022" /-->
                          <select id="expyear" name="expyear">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
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
        <input type="submit" value="Continue and Print receipt" class="btn_submit">
      </form>
    </div>
  </div>
</div>
    <script type="text/javascript" src="js/checkout.js"></script><br><br><br>
    
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