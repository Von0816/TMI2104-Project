<?php

  include "../connection.php";

  $memberUsername=$memberName=$memberGender=$memberAddress=$memberEmail=$memberHP=$memberPassword=$memberPassword="";;
 
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $memberUsername = $_POST["username"];
    $memberName = $_POST["name"];
    $memberAddress = $_POST["address"];
    $memberEmail = $_POST["email"];
    $memberHP= $_POST["hp"];
    $memberPassword = $_POST["password"];
    
    $sql = "INSERT INTO member(memberUsername, memberName, memberAddress, memberEmail, memberHP, memberPassword) VALUES ('$memberUsername','$memberName', '$memberAddress', '$memberEmail', '$memberHP', '$memberPassword')";

    if(mysqli_query($link, $sql)){
      echo "<script>alert('Account Created')</script>";
      echo "<script>location.href='../index.php';</script>";
    }else{
      echo "<script>alert('".mysqli_error($link)."')</script>";
      echo "<script type='text/javascript'>window.location.href = '../index.php'</script>";
    }
  }    

?>