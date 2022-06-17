<?php
   
    session_start(); // Initialize the session.
    session_unset(); // Unset all of the session variables.
    session_destroy(); // Finally, destroy the session.
    echo "<script>alert('Sucessfully logged out. Have a nice day ahead!'); window.location='index.php';</script>";

?>
