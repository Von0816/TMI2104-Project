<?php
    include("../../connection.php");

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $bookingID = filterInput($_POST["updateBooking"]);
        $bookingStatus = filterinput($_POST["bookingStatus-$bookingID"]);

        if(empty($bookingID)){
            $error .= "Booking ID cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9]*$/", $bookingID)){
            $error .= "Booking ID can only contains number\\n";
        }
        if(empty($bookingStatus)){
            $error .= "Booking status cannot be blank\\n";
        }
        if(empty($error)){
            $sql = "UPDATE booking SET 
                        bookingStatus = '$bookingStatus'
                    WHERE bookingID = $bookingID";

            $result = mysqli_query($link,$sql);

            if($result){
                echo "<script type='text/javascript'>alert('Booking Edited')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-bookings.php')</script>";
            }
            else {
                echo "<script type='text/javascript'>alert('Failed')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-bookings.php')</script>";
            }
        }
        else {
            handleError($error);
        }


    }
        mysqli_close($link);

    function handleError($msg){
            echo "<script type='text/javascript'>alert('".$msg."')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-bookings.php')</script>";
    }

    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }


    
?>