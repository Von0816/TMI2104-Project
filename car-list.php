<?php include("connection.php"); ?>

<html>
    <head>
        <title>Car List</title>
        <link rel="stylesheet" href="css/car-list.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body id="body">

        <!--nav bar-->
        <?php include("navBarIndex.php"); ?>
       
        <!-- ------------------------------------------------------------------------------------------------------------- -->
        <div class="content">
            <h1>Cars</h1>
            <div id="car-grid">
                <?php 
                    $sql = "SELECT * FROM car";
                    $result = mysqli_query($link, $sql);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo    "<a class='card' id=".$row['carID']." href='car.php' method='GET' value=".$row['carID'].">
                                        <img src='".$row['carPic']."'>
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