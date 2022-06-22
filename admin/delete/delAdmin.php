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
                header('Location: ../admin-users.php');
                echo "<script type='text/javascript'>alert('Failed')</script>";
            }
            else {
                header('Location: ../admin-users.php');
                echo "<script type='text/javascript'>alert('Failed')</script>";
            }
        }
    }
?>