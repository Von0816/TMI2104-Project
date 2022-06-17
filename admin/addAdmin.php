<?php

    include($_SERVER['DOCUMENT_ROOT']."/Project 1/connection.php");

    $error = "";
    $fname = $lname = $email = $phone = $password = $accept = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $adminID = filterInput($_POST["adminID"]);
        $adminUsername= filterInput($_POST["adminUsername"]);
        $adminPassword = filterInput($_POST["adminPassword"]);
        
        if(empty($adminUsername)){
        $error = "Please enter your first name";
        handleError($error);
        }
        else{
        if(!preg_match("/^(\w\D\S)*$/", $adminUsername)){
            $error = "First character must be uppercase and followed by lowercase";
            handleError(($error));
        }
        }
        if(empty($adminPassword)){
        $error = "Please set admin password";
        handleError($error);
        }
        else {
        if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/", $adminPassword)){
            $error = "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace";
            handleError(($error));
        }

        if(empty($error)){
            $sql = "INSERT INTO admin(adminID, adminUsername, adminPassword) VALUES('$adminID', '$adminUsername', '$adminPassword')";
            $result = mysqli_query($link, $sql);

            if($result){
                header('Location: admin-users.php');
                echo "<script type="."text/javascript".">alert("."Added".")</script>";
            }
            else {
                echo "<script>alert("."Failed".")</script>";
                echo "<script type='text/javascript'>alert('Failed')</script>";
            }
        }

    }
    }

    function handleError($message){
        header("Location: admin-users.php");
        echo '<script type="text/javascript">alert("'.$message.'");</script>';
    }

    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }


    
?>