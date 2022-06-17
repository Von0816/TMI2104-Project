<?php
    include("../../connection.php");

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $adminID = filterInput($_POST["updateAdmin"]);
        $adminUsername= filterInput($_POST["adminUsername-$adminID"]);
        $adminPassword = filterInput($_POST["adminPassword-$adminID"]); 
        
        if(empty($adminID)){
            $error .= "Admin ID cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9]*$/", $adminID)){
            $error .= "Admin ID can only contains number\\n";
        }
        if(empty($adminUsername)){
            $error .= "Admin Username cannot be blank\\n";
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $adminUsername)){
            $error .= "Admin username can only be alphanumerical\\n";
        }
        if(empty($adminPassword)){
            $error .= "Admin Password cannot be blank\\n";
        }
        else if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/", $adminPassword)){
          $error .= "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace\\n";
        }

        if(empty($error)){
            $sql = "UPDATE admin SET adminUsername = '$adminUsername', adminPassword= '$adminPassword' WHERE adminID = $adminID";

            $result = mysqli_query($link,$sql);

            if($result){
                echo "<script type='text/javascript'>alert('Admin Edited')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
            else {
                echo "<script type='text/javascript'>alert('Failed')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
        }
        else {
            // echo $error;
            handleError($error);
        }


    }
    function handleError($msg){
            echo "<script type='text/javascript'>alert('".$msg."')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
    }

    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }


    
?>