<?php

include "connection.php";

$mID = $_SESSION['userID'];

if(isset($_POST['update'])){
    $mUserName = $_POST['username'];
    $mName = $_POST['name'];
    $mAddr = $_POST['address'];
    $mEmail = $_POST['email'];
    $mHP = $_POST['hp'];
    $mPass = $_POST['password'];

    $sql = "UPDATE member SET memberUsername = '$mUserName', memberName = '$mName',
    memberAddress = '$mAddr', memberEmail = '$mEmail', memberHP = '$mHP', memberPassword = '$mPass'
    WHERE memberID = '$mID'";

    if($link->query($sql)){
        echo '<script type="text/javascript">alert("Successfully update the profile...");
        window.location="userDashboard.php";</script>';
    }else{
        echo '<script type="text/javascript">alert("Error while updating the profile...");
            window.location="index.php";</script>';
    }
}

mysqli_close($link);
?>