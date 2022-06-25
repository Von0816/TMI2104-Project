<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>LINGsCARS</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="icon" type="image/x-icon" href="img/logo2.png">
        <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>
        <script>
            if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <script src="js/index.js" defer></script>


    </head>
    <body>
        <!--nav bar-->
        <?php include("navbar.php"); ?>
       

        <!--Carousel website-->
        <section class="carousel">
            <div class="mySlides fade">     
                <img src="img/1.png" style="width:100%"> 
            </div>
            <div class="mySlides fade">
                <img src="img/2.png" style="width:100%">      
            </div>
            <div class="mySlides fade">        
                <img src="img/3.png" style="width:100%">       
            </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </section>

        <!--Best Selling Cars-->
        <section class="feaCar">
            <div class="header">
                <h1>FEATURED CARS</h1>
                <h3>Our best selling car leasing deals!</h3>
            </div>
            <div class="content">
                <div id="car-grid">
                    <?php 
                        $sql = "SELECT * FROM car WHERE carID in (1,4,7)";
                        $result = mysqli_query($link, $sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo    "<a class='card' id=".$row['carID']." href='car.php?carID=".$row['carID']."'>
                                        <img src='img/".$row['carPic']."'>
                                        <div class='details'>
                                        <h3>".$row['carName']."</h3>
                                        <p>".$row['carFuel']." | ".$row['carGearBox']." | ".$row['carBHP']."</p>
                                        <div class='price'>
                                        <h4>Starting At: </h4>
                                        <h4>£".$row['carMonthlyRate']."/month<sup>*including VAT</sup></h4>
                                        </div>
                                        </div>
                                        </a>";
                            }
                        }
                    ?>
                </div>
            </div>
        </section>

        <!--Customer Reviews-->
        <section class="custReview">
            <div class="header">
                <h1>CUSTOMER REVIEWS</h1>
                <h3>You Happy, We Happy</h3>
            </div>
            <div class="row">
                <div class="cust">
                    <p>"Well done Ling! A very good service supplying new Astra. Please send more gifts! Xxx."</p>
                    <h3>-Patrick-</h3>
                </div>
                <div class="cust">
                    <p>"Great prices, great cars and great service. Good delivery."</p>
                    <h3>-Peter-</h3>
                </div>
                <div class="cust">
                    <p>"As always absolutely perfect. Cannot be faulted"</p>
                    <h3>-Marcus-</h3>
                </div>
            </div>
        </section>
		
        <!--FAQ-->
        <section class="faq">
            <div class="header">
                <h1>FAQ</h1>
            </div>
            <div class="faqCont">
                <div class="Qs">
                    <b>Should I choose LingsCars?</b>
                </div>
                <div class="ans">
                    <p>With our deals, you get a brand new car with zero miles on the clock, 
                        delivered to your door. The new car is fully taxed and has the full manufacturer's warranty and AA cover. 
                        You then run this new car for 12, 18, 24, or 36 months depending on the term, and run it within an agreed 
                        mileage limit (usually 10,000, 15,000, or 20,000 miles per year). LingsCars get car deals from many sources, 
                        main dealers, and finance companies, or we work them out ourselves using different finance companies.</p>
                </div><hr>
                <div class="Qs">
                    <b>What should I know about car leasing?</b>
                </div>
                <div class="ans">
                    <p>Car and Vehicle leasing is the leasing of the use of a car for a fixed 
                        period of time. It is a cost-effective alternative to car or vehicle purchases. It can be known as PCP or 
                        contract hire. The key difference in a car lease is that after the lease expires, the customer can return 
                        the car or vehicle to the dealer for no cost, or can often buy it at an agreed price. Ling owns the UK’s 
                        craziest car leasing company.</p>
                </div><hr>
                <a href="support.php" class="button">MORE FAQs</a></button>  
            </div> 
        </section>

        <!--FOOTER-->
        <section class="footer">
            <footer class="f">
                <a href="index.php"><img src="img/lingscars-logo.png"></a>           
                <p> Company Reg No: 6178634 || VAT No: 866 0241 30 <br>
                    © Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.</p>
            </footer>
        </section>
    </body>
</html>
