<?php 
    include("connection.php"); 

    $query = "SELECT * FROM car WHERE carID =".$_GET['carID'];
    $result = mysqli_query($link, $query);
    $car = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $car['carName']; ?></title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/car.css">
    </head>
    <body>  
        <?php include("navBarIndex.php"); ?>

        <section class="CarInfo">
            <div class="row">
                <div class="col-1">
                    <h2><?php echo $car['carName']; ?></h2>
                    <p>Fuel : <?php echo $car['carFuel']; ?></p>
                    <p>Paint : <?php echo $car['carPaint']; ?></p>
                    <p>Gearbox : <?php echo $car['carGearBox']; ?></p>
                    <h4>£<?php echo $car['carMonthlyRate']; ?>/mth including VAT</h4>
                    
                    <form action="booking.php" name="carForm" method="post">
                        <input type="hidden" id ="carType" name="carType" vaLue=<?php echo $car['carID']; ?>/>
                        <a><button type="submit" name = "submit">Book Now </button>
                    </form>
                    
                    
                </div>
                <div class="col-2">
                    <img src="<?php echo $car['carPic']; ?>" class ="car">
                    <div class="color-box"></div>

                </div>
            </div>

        <br><br><br><br>
                
        <!--FOOTER-->
        <section class="footer">
            <footer class="f">
                <a href="css/carInfo.css"><img src="img/lingscars-logo.png"></a>           
                <p> Company Reg No: 6178634 || VAT No: 866 0241 30 <br>
                    © Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.</p>
            </footer>
        </section>
    </body>
</html>