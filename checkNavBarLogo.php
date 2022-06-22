<?php
    include("connection.php");
    if($_SESSION['accLevel'] == "member"){
        
        echo "<script>window.location='indexMember.php';</script>";
                        
    }
    else{
        echo "<script>window.location='index.php';</script>";
    }
?>