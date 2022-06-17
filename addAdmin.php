<?php

    include("connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $adminID = filterInput($_POST["adminID"]);
        $adminUsername= filterInput($_POST["adminUsername"]);
        $adminPassword = filterInput($_POST["adminPassword"]); 
        $query = "SELECT * FROM admin WHERE adminID = $adminID";
        $adminCheck = mysqli_query($link, $query);
        if($adminCheck->num_rows == 0){
            $sql = "INSERT INTO admin(adminID, adminUsername, adminPassword) VALUES('$adminID', '$adminUsername', '$adminPassword')";
            $result = mysqli_query($link, $sql);
            if($result){
                header('Location: admin-users.php?Message='.urlencode('Admin added'));
            }
            else {
                header('Location: admin-users.php?Message='.urlencode('Failed to add admin'));
            }
        }
        else {                    
            header('Location: admin-users.php?Message='.urlencode('Admin already existed'));
        }

    }


    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }


    
?>