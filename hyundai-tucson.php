<?php include("connection.php"); ?>

<html>
    <head>
        <title>LINGsCARS</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="carInfo.css">
        <link rel="icon" type="image/x-icon" href="img/logo2.png">
        <script src="main.js"></script>
        

    </head>
    <body id="body">
         <!--nav bar-->
         <?php include("navBarIndex.php"); ?>
       
     
        <section class="CarInfo">
            <div class="row">
                <div class="col-1">
                    <h2>Hyundai Tucson</h2>
                    <h3>1.6 TGDi 2WD SE Connect (150bhp) Estate 5dr Petrol Manual (150bhp)</h3>
                    <h3>(Brand New)</h3>
                    <p>Fuel : Petrol </p>
                    <p>Paint : Metallic</p>
                    <p>Gearbox : Manual</p>
                    <h4>£249.53/mth including VAT</h4>
                    <a href="Checkout.html"><button type="button">Book Now </button>
                </div>
                <div class="col-2">
                    <img src="img\Hyundai Tucson.jpg" class ="car">
                    <div class="color-box"></div>

                </div>
            </div>
        <br><br><br><br>
                
        <!--FOOTER-->
        <section class="footer">
            <footer class="f">
                <a href="carInfo.css"><img src="img/lingscars-logo.png"></a>           
                <p> Company Reg No: 6178634 || VAT No: 866 0241 30 <br>
                    © Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.</p>
            </footer>
        </section>
    </body>
</html>
