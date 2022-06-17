<?php
$server = "localhost";
$user = "root";
$password = "bDQ349@tmYkGNq#s";
$db = "lingscars";

$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $adminID = $_POST['adminID'];
    $adminUsername = $_POST['adminUsername'];
    $adminPassword = $_POST['adminPasword'];

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