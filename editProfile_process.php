<?php

include "connection.php";

//$mID = $_SESSION['memberID'];
$mID = 1;//TESTING DB AJAK

if(isset($_POST['update'])){
    $mUserName = $_POST['memberUsername'];
    $mName = $_POST['memberName'];
    $mGender = $_POST['memberGender'];
    $mAddr = $_POST['memberAddress'];
    $mEmail = $_POST['memberEmail'];
    $mHP = $_POST['memberHP'];
    $mPass = $_POST['memberPassword'];

    $sql = "UPDATE member SET memberUsername = '$mUserName', memberName = '$mName', memberGender = '$mGender', 
    memberAddress = '$mAddr', memberEmail = '$mEmail', memberHP = '$mHP', memberPassword = '$mPass'
    WHERE memberID = '$mID'";

    if($link->query($sql)){
        echo "BERJAYA";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}

mysqli_close($link);
?>