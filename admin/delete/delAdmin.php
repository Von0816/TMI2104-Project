<?php 
    include("../../connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        if($_SESSION['userID'] == $id){
            header('Location: ../admin-users.php');
            echo "<script type='text/javascript'>alert('You can't delete your own account')</script>";
        }
        else {
            $sql = "DELETE FROM admin WHERE adminID = $id";
            $result = mysqli_query($link, $sql);
            if($result){
                echo "<script type='text/javascript'>alert('Admin Deleted')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
            else {
                echo "<script type='text/javascript'>alert('".mysqli_error($link)."')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
        }
    }
        mysqli_close($link);
?>