<?php
    include("connection.php");

if(isset($_POST['submit'])){
    $adminID = $_POST['editAdminID'];
    $adminUsername = $_POST['editAdminUsername'];
    $adminPassword = $_POST['editAdminPasword'];

    $sql = "UPDATE admin SET adminUsername = $adminUsername WHERE adminID = $adminID";
    $result = $conn->query($sql);

    if($result){
        header('Location: admin-users.php');
        echo "<script type="."text/javascript".">alert("."Added".")</script>";
    }
    else {
        echo "<script type='text/javascript'>console.log('Failed')</script>";
    }
}

?> 