<?php include("connection.php"); ?>

<html>
    <head>
        <title>LINGsCARS</title>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="carInfo.css">
        <link rel="icon" type="image/x-icon" href="img/logo2.png">
        <script src="index.js"></script>
        

    </head>
    <body id="body">
         <!--nav bar-->
         <?php include("navBarIndex.php"); ?>
      
        <section class="CarInfo">
            <div class="row">
                <div class="col-1">
                    <h2>Audi A6 Saloon</h2>
                    <h3>40 TDI Quattro Sport (204bhp) Saloon 4dr Diesel S Tronic (204bhp)</h3>
                    <h3>(Brand New)</h3>
                    <p>Fuel : Diesel </p>
                    <p>Paint : Metallic</p>
                    <p>Gearbox : Automatic</p>
                    <h4>£464.39/mth including VAT</h4>

                    <form action="booking.php" name="carForm" method="post">
                        <input type="hidden" id ="carType" name="carType" vaLue="3"/>
                        <a><button type="submit" name = "submit">Book Now </button>
                    </form>

                </div>
                <div class="col-2">
                    <img src="img\Audi A6 Saloon.jpg" class ="car">
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
