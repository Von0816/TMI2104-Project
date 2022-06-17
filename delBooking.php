<?php 
    include("connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM booking WHERE bookingID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            header('Location: admin-bookings.php');
            echo "<script type='text/javascript'>alert('Successful')</script>";
        }
        else {
            header('Location: admin-bookings.php');
            echo "<script type='text/javascript'>alert('Failed')</script>";
        }
    }
?>