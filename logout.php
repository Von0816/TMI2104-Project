<?php
    include("connection.php");
    if(isset($_SESSION['username'])){
        //echo "Sucessfully logged in as admin..Welcome". $_SESSION['username'];
        
        // Initialize the session.
        session_unset(); // Unset all of the session variables.
        session_destroy(); // Finally, destroy the session.
            
    }

    else{

        echo "<script>alert('You are not logged in!'); window.location='index.php';</script>";
    }
   
   

?>
