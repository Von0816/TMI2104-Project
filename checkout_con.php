<?php
    
    include "connection.php"; 
    
    
    $bookCar = $dateT = $payMethod = $fname = $lname = $email = $address = $city = $state = $cardname = $cardnumber = $expmonth = $expyear = $cvv = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $cardname = $_POST["cardname"];
        $cardnumber = $_POST["cardnumber"];
        $expmonth = $_POST["expmonth"];
        $expyear = $_POST["expyear"];
        $cvv = $_POST["cardcvv"];
        

        $date = date_default_timezone_set('Asia/Kuala_Lumpur');
        $dateT = date('Y-m-d H:i:s');

        $payMethod = "card";

        $sql = "SELECT * FROM booking WHERE memberID = '".$_SESSION['userID']."' ORDER BY bookingID DESC LIMIT 1";
        $query = $link -> query($sql);
        $row = $query -> fetch_assoc();
        $num = $query -> num_rows;	
                
        if($num==1){
            $_SESSION['bookingID'] = $row['bookingID'];
            $bookCar = $_SESSION['bookingID'];
        }

        

        $sql = "INSERT INTO payment(bookingID, paymentDateTime, paymentMethod, billing_fName, billing_lName, billing_email, billing_addr, billing_city, billing_state, nameOnCard, cardNum, cardEXPmonth, cardEXPyear, card_CVV)
        VALUES ('$bookCar','$dateT','$payMethod','$fname', '$lname', '$email', '$address', '$city', '$state', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv')";

        $_SESSION['firstname'] = $fname;
        $_SESSION['lastname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['address'] = $address;
        $_SESSION['city'] = $city;
        $_SESSION['state'] = $state;
        $_SESSION['datetime'] = $dateT;
    }

    if(mysqli_query($link, $sql)){

        echo "<script type='text/javascript'>alert('Your payment is successful.. Thank you!!'); 
        window.open('receipt.php', '_blank');
        location.href='indexMember.php';</script>";

        //echo "<script type='text/javascript'> window.open('receipt.php', '_blank'); </script>";
        //echo "<script>location.href='indexMember.php';</script>";

    }else{
        echo "<script>alert('The payment process is unsuccessful..');
            window.history.back()</script>";
    }
?>