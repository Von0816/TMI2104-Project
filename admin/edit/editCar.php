<?php
    include("../../connection.php");

    $error="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $carID = filterInput($_POST['updateCar']);
        $carName = filterInput($_POST["name-$carID"]);
        $carBody = filterInput($_POST["body-$carID"]);
        $carTrim =filterInput($_POST["trim-$carID"]);
        $carFuel =filterInput($_POST["fuel-$carID"]);
        $carBHP = filterInput($_POST["bhp-$carID"]);    
        $carGearBox = filterInput($_POST["gearbox-$carID"]);
        $carPaint =filterInput($_POST["paint-$carID"]);
        $carTerm = filterInput($_POST["term-$carID"]);
        $carMonthlyRate = filterInput($_POST["rate-$carID"]);
        $carImgPath = filterInput($_POST["imgPath-$carID"]);

        if(empty($carID)){
            $error .= "Car cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9]*$/", $carID)){
            $error .= "Car ID can only contains digits\\n";
        }
        if(empty($carName)){
            $error .= "Car name cannot be blank\\n";
        }
        if(empty($carBody)){
            $error .= "Car body cannot be blank\\n";
        }
        if(empty($carTrim)){
            $error .= "Car trim cannot be blank\\n";
        }
        if(empty($carFuel)){
            $error .= "Car fuel cannot be blank\\n";
        }
        if(empty($carBHP)){
            $error .= "Car BHP cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9]*$/", $carBHP)){
            $error .= "Car BHP can only contains digits\\n";
        }
        if(empty($carGearBox)){
            $error .= "Car gear box cannot be blank\\n";
        }
        if(empty($carPaint)){
            $error .= "Car paint cannot be blank\\n";
        }
        if(empty($carTerm)){
            $error .= "Car term cannot be blank\\n";
        }
        if(empty($carMonthlyRate)){
            $error .= "Car monthly rate cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9\.0-9]*$/", $carMonthlyRate)){
            $error .= "Car monthly rate must be in decimals\\n";
        }
        if(empty($carImgPath)){
            $error .= "Please enter car image path";
        }


        if(empty($error)){
            $sql = "UPDATE car SET 
                        carName = '$carName',
                        carBody = '$carBody',
                        carTrim = '$carTrim',
                        carFuel = '$carFuel',
                        carBHP = '$carBHP',
                        carGearBox = '$carGearBox',
                        carPaint = '$carPaint',
                        carTerm = '$carTerm',
                        carMonthlyRate = '$carMonthlyRate',
                        carPic = '$carImgPath'
                    WHERE carID = $carID";
            $result = mysqli_query($link, $sql);
            if($result){
                echo "<script type='text/javascript'>alert('Car Edited')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
            }
            else {
            echo "<script type='text/javascript'>alert('".mysqli_error($link)."')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
            }
        }
        else {
            handleError($error);
        }

    }
    function handleError($msg){
        echo "<script type='text/javascript'>alert('".$msg."')</script>";
        echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
    }


    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

?>