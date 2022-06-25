<!-- Clear cart -->

<?php 

    include("connection.php");
    if(isset($_SESSION['cart']) &&  !empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        echo '<script type="text/javascript">alert("Cart Cleared")</script>';
        echo "<script type='text/javascript'>window.location='cart.php'</script>";
    }
    else {
        echo '<script type="text/javascript">alert("Your cart is already empty")</script>';
        echo "<script type='text/javascript'>window.location='cart.php'</script>";
    }
?>