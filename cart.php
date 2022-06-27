<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/cart.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style> 
    </head>
    <body>
        <?php include("navbar.php"); ?>
        <div id="cart-content">
            <h1>Cart</h1> 
            <?php
                // echo "<script>console.log('".$_SESSION['cart']."')</script>";
                if(isset($_SESSION['cart'])){
                    $sql = "SELECT carID, carName, carFuel, carBHP, carGearBox, carPic, carTerm, carMonthlyRate FROM car WHERE carID =".$_SESSION['cart'];
                    $result = mysqli_query($link, $sql);
                    $car = $result->fetch_assoc();
                    echo "<div id='cart-item'>";
                    echo "<img src='img/".$car['carPic']."' />";
                    echo    "<div id='item-details'>
                                <h2>".$car['carName']."</h2>
                                <div id='item-short-desc'>
                                    <p>Fuel: ".$car['carFuel']."</p>
                                    <p>| Gear Box: ".$car['carGearBox']."</p>
                                    <p>| Term: ".$car['carTerm']."</p>
                                </div>
                            </div>";
                    echo "<h4 id='car-rate'>£".$car['carMonthlyRate']."</h4>";
                    echo "</div>";
                    echo "<a href='cc.php' id='cc'>clear cart</a>";
                    echo    "<div id='price-details'>
                                <p class='label'>Total Price :</p>
                                <p>£".$car['carMonthlyRate']."</p>
                            </div>";
                    echo    "<form action='booking.php' method='POST' class='align-left'>
                                <input type='hidden' name='carID' value='".$car['carID']."'>
                                <button type='submit' name='checkout' id='checkout-btn'>Checkout</button>
                            </form>";
                }
                else {
                    echo "<h2>Your Cart Is Empty!</h2>";
                }
            ?>
        </div>
        <section class="footer">
            <footer class="f">
                <a href="index.php"><img src="img/lingscars-logo.png"></a>           
                <p>
                    Company Reg No: 6178634 || VAT No: 866 0241 30 
                    <br>
                    © Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.
                </p>
            </footer>
        </section>
    </body>
</html>

<?php mysqli_close($link); ?>