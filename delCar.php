<?php 
    include("connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM car WHERE carID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            header('Location: admin-cars.php');
            echo "<script type='text/javascript'>alert('Failed')</script>";
        }
        else {
            header('Location: admin-cars.php');
            echo "<script type='text/javascript'>alert('Failed')</script>";
        }
    }
?>