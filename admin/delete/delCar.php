<?php 
    include("../../connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM car WHERE carID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            echo "<script type='text/javascript'>alert('Car Deleted')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('".mysqli_error($link)."')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-cars.php')</script>";
        }
    }
?>