<?php 

    include("connection.php");
    if(isset($_SESSION['cart']) &&  !empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }
?>