<?php
    include("connection.php");

    if(isset($_POST['submit'])){
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

        $query = "SELECT * FROM car WHERE carID = $carID";
                $check = mysqli_query($link, $query);
                if($check->num_rows == 0){
        $sql = "INSERT INTO car(carID, carName, carBody, carTrim, carFuel, carBHP, carGearBox, carPaint, carTerm, carMonthlyRate) VALUES('$carID','$carName','$carBody','$carTrim','$carFuel','$carBHP','$carGearBox','$carPaint','$carTerm','$carMonthlyRate')";
                    $result = mysqli_query($link, $sql);
                    if($result){
                        header('Location: admin-cars.php?Message='.urlencode('Car added'));
                    }
                    else {
                        header('Location: admin-cars.php?Message='.urlencode('Failed to add car'));
                    }
                }
                else {                    
                    header('Location: admin-cars.php?Message='.urlencode('Car already existed'));
                }

    }
    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

?>