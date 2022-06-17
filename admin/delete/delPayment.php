<?php 
    include("../../connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM payment WHERE paymentID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            echo "<script type='text/javascript'>alert('Payment Deleted')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-payments.php')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Deletion Failed')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-payments.php')</script>";
        }
    }
?>