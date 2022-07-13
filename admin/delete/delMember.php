<?php 
    include("../../connection.php");
    if(isset($_POST['del-btn'])){
        $id = $_POST['del-btn'];
        $sql = "DELETE FROM member WHERE memberID = $id";
        $result = mysqli_query($link, $sql);
        if($result){
            header('Location: ../admin-users.php');
            echo "<script type='text/javascript'>alert('Member Deleted')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
        }
        else {
            echo "<script type='text/javascript'>alert('".mysqli_error($link)."')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
        }
    }
        mysqli_close($link);
?>