<?php

  include "member_registeration.php";

  $memberUsername="";
  $memberName="";
  $memberGender="";
  $memberAddress="";
  $memberEmail="";
  $memberHP="";
  $memberPassword="";
  $memberPassword="";
 
  
  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $memberUsername = $_POST["memberUsername"];
    $memberName = $_POST["memberName"];
    $memberGender = $_POST["memberGender"];
    $memberAddress = $_POST["memberAddress"];
    $memberEmail = $_POST["memberEmail"];
    $memberHP= $_POST["memberHP"];
    $memberPassword = $_POST["memberPassword"];
  
    $sql = "INSERT INTO member(memberUsername, memberName, memberGender, memberAddress, memberEmail, memberHP, memberPassword)
        VALUES ('$memberUsername','$memberName','$memberGender','$memberAddress', '$memberEmail', '$memberHP', '$memberPassword')";

        $_SESSION['memberUsername'] = $memberUsername;
        $_SESSION['memberName'] = $memberName;
        $_SESSION['memberGender'] = $memberGender;
        $_SESSION['memberAddress'] = $memberAddress;
        $_SESSION['memberEmail'] = $memberEmail;
        $_SESSION['memberHP'] = $memberHP;
        $_SESSION['memberPassword'] = $memberPassword;
}    
    if(mysqli_query($link, $sql)){
          echo"member registered";
          echo "<script>location.href='member_registeration.php';</script>";
      }else{
          echo "Error" . mysqli_error($link);
      }
  ?>
  
?>