<?php

  include "connection.php";

  $memberUsername=$memberName=$memberGender=$memberAddress=$memberEmail=$memberHP=$memberPassword=$memberPassword="";;
 
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $memberUsername = $_POST["username"];
    $memberName = $_POST["name"];
    $memberAddress = $_POST["address"];
    $memberEmail = $_POST["email"];
    $memberHP= $_POST["hp"];
    $memberPassword = $_POST["password"];
  
    $sql = "INSERT INTO member(memberUsername, memberName, memberAddress, memberEmail, memberHP, memberPassword) VALUES ('$memberUsername','$memberName', '$memberAddress', '$memberEmail', '$memberHP', '$memberPassword')";

      $_SESSION['memberUsername'] = $memberUsername;
      $_SESSION['memberName'] = $memberName;
      $_SESSION['memberGender'] = $memberGender;
      $_SESSION['memberAddress'] = $memberAddress;
      $_SESSION['memberEmail'] = $memberEmail;
      $_SESSION['memberHP'] = $memberHP;
      $_SESSION['memberPassword'] = $memberPassword;

    if(mysqli_query($link, $sql)){
      echo "<script>location.href='index.php';</script>";
    }else{
        echo "Error" . mysqli_error($link);
    }
  }    

?>