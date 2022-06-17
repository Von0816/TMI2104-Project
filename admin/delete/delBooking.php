<?php 
    include("../../connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM booking WHERE bookingID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            echo "<script type='text/javascript'>alert('Booking Deleted')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-bookings.php')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('Deletion Failed')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-bookings.php')</script>";
        }
    }
?>