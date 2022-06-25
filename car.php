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
        <style> @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');</style>  
    </head>
    <body>  
        <?php include("navbar.php"); ?>

        <section id="car-info">
            <div id="car-img">
                <img src="img/<?php echo $car['carPic'] ?>" alt="">
            </div>
            <div id="car-short-info">
                <h1 id="car-name"><?php echo $car['carName']; ?></h1>
                <div id="car-rate">
                    <div id="rate">
                        <h4>Monthly Rate:</h4>
                        <p>£<?php echo $car['carMonthlyRate']; ?><sup>*including VAT</sup></p>
                    </div>
                </div>
                <form action="booking.php" name="carForm" method="post">
                    <input type="hidden" id ="carType" name="carType" value=<?php echo $car['carID']; ?>/>
                    <button type="submit" name = "submit" id="atc-btn">Book Now </button>
                </form>
            </div>
            <div id="car-specs">
                <h2>Details Specifications</h2>
                <table>
                    <tr>
                        <th>Body</th>
                        <td><?php echo $car['carBody'] ?></td>
                    </tr>                    <tr>
                        <th>Trim</th>
                        <td><?php echo $car['carTrim'] ?></td>
                    </tr>                    <tr>
                        <th>Fuel</th>
                        <td><?php echo $car['carFuel'] ?></td>
                    </tr>                    <tr>
                        <th>BHP</th>
                        <td><?php echo $car['carBHP'] ?></td>
                    </tr>                    <tr>
                        <th>Gear Box</th>
                        <td><?php echo $car['carGearBox'] ?></td>
                    </tr>                    <tr>
                        <th>Paint</th>
                        <td><?php echo $car['carPaint'] ?></td>
                    </tr>                    <tr>
                        <th>Term</th>
                        <td><?php echo $car['carTerm'] ?></td>
                    </tr>
                </table>
            </div>
        </section>
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