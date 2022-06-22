<?php
include("connection.php");
    if(isset($_SESSION['username'])){
        if($_SESSION['accLevel'] == 'admin'){
            echo "<script type='text/javascript'>window.location.href = 'admin/admin-analytics.php'</script>";
        }
        else {
            echo "<script>alert('Permission Denied')</script>";
            echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
        }
    } else {
            echo "<script>alert('Please log in')</script>";
            echo "<script type='text/javascript'>window.location.href = 'index.php'</script>";
    }
?>