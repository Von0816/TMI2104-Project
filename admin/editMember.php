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
    $adminPassword = $_POST['adminPassword'];

    $sql = "INSERT INTO admin(adminID, adminUsername, adminPassword) VALUES('$adminID', '$adminUsername', '$adminPassword')";
    $result = $conn->query($sql);

    if($result){
        header('Location: admin-users.php');
        echo "<script type="."text/javascript".">alert("."Added".")</script>";
    }
    else {
        echo "<script>alert("."Failed".")</script>";
        echo "<script type='text/javascript'>alert('Failed')</script>";
    }
}

?> 