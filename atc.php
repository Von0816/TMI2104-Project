<?php

    include ("connection.php");    

    if (isset($_POST['atc'])){
        $carID = $_POST['carID'];

        if(empty($_SESSION['cart'])) {
            $_SESSION['cart'] = $carID;
            echo '<script type="text/javascript">alert("Added '.$_POST['carName'].' to your cart")</script>';
            echo "<script type='text/javascript'>window.location='index.php'</script>";
        }
        
        else{
            echo '<script type="text/javascript"> alert("Your cart is full! Please checkout or remove an item from your cart to add new item.")</script>';
        }
    }
?>

