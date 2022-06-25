<?php
    include("../../connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $carID = filterInput($_POST['carID']);
        $carName = filterInput($_POST['carName']);
        $carBody = filterInput($_POST['carBody']);
        $carTrim =filterInput($_POST['carTrim']);
        $carFuel =filterInput($_POST['carFuel']);
        $carBHP = filterInput($_POST['carBHP']);    
        $carGearBox = filterInput($_POST['carGearBox']);
        $carPaint =filterInput($_POST['carPaint']);
        $carTerm = filterInput($_POST['carTerm']);
        $carMonthlyRate = filterInput($_POST['carMonthlyRate']);
        $carImgPath = filterInput($_POST['imgPath']);

        $query = "SELECT * FROM car WHERE carID = $carID";
                $check = mysqli_query($link, $query);
                if($check->num_rows == 0){
        $sql = "INSERT INTO car(carID, carName, carBody, carTrim, carFuel, carBHP, carGearBox, carPaint, carTerm, carMonthlyRate, carPic) VALUES('$carID','$carName','$carBody','$carTrim','$carFuel','$carBHP','$carGearBox','$carPaint','$carTerm','$carMonthlyRate', '$carImgPath')";
                    $result = mysqli_query($link, $sql);
                    if($result){
                        echo "<script type='text/javascript'>alert('Car Added')</script>";
                        echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
                    }
                    else {
                        echo "<script type='text/javascript'>alert('".mysqli_error($link)."')</script>";
                        echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
                    }
                }
                else {                    
                    echo "<script type='text/javascript'>alert('Card Already Exists')</script>";
                    echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
                }

    }
    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

?>