<?php

  $memberUsername="";
  $memberUsernameErr="";
  $memberName="";
  $memberNameErr="";
  $memberGender="";
  $memberGenderErr="";
  $memberAddress="";
  $memberAddressErr="";
  $memberEmail="";
  $memberEmailErr="";
  $memberHP="";
  $memberHPErr="";
  $memberPassword="";
  $memberPasswordErr="";
  

  //Database connection
  $conn = new mysqli('localhost','root','','db');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into member (memberUsername,memberName,memberGender,memberAddress,memberEmail,memberHP,memberPassword) 
    values (?,?,?,?,?,?,?)");
    $stmt-> bind_param("sssssis",$memberUsername,$memberName,$memberGender,$memberAddress,$memberEmail,$memberHP,$memberPassword);
    $stmt-> execute();
    echo "Registeration Successfully..";
    $stmt ->close();
    $conn->close();
  }


  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberUsername"]))
    {
      $memberUsernameErr="Required Field";
    }
    else
    {
      $memberUsername=test_input ($_POST["memberUsername"]);
    }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberName"]))
    {
     $memberNameErr="*Required Field";
    }
    else
   {
     $memberName=test_input ($_POST["memberName"]);
     if(!preg_match("/^(\b[A-Z][a-z]*\s*)+$/",$memberName))
     {
        $memberNameErr="*First character uppercase followed by lowercase";
     }     
   }
  }
  
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberGender"]))
    {
      $memberGenderErr="*Required Field";
    }
    else
   {
      $memberGender=test_input ($_POST["memberGender"]);   
   }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberAddress"]))
    {
      $memberAddressErr="*Required Field";
    }
    else
   {
      $memberAddress=test_input ($_POST["memberAddress"]);   
   }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberEmail"]))
    {
      $memberEmail="*Required Field";
    }
    else
   {
      $member = test_input($_POST["memberEmail"]);
    if (!filter_var($memberEmail, FILTER_VALIDATE_EMAIL)) {
      $memberEmailErr = "*Invalid email format";
    }
   }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberHP"])){
      $memberHPErr="*Phone Number is Required";
  
    }else{
    $mNumber=test_input ($_POST["memberHP"]);
    if(!preg_match("/^(\+?6?01)[02-46-9]-*[0-9]{7}$|^(\+?6?01)[1]-*[0-9]{8}$/",$memberHP)){
      $memberHPErr="*Phone number is Invalid";
    }
  }
  }

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["memberPassword"])){
      $memberPasswordErr="*Required field";
    }else{
      $memberPassword=test_input ($_POST["memberPassword"]);
      if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])$/", $memberPassword)) 
      {
        $memberPasswordErr="*The password does not meet the requirements!\n
        * contain at least ONE uppercase, ONE numeric, ONE special character, number and no space";
      }
    }
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(!isset($_POST["submit"]))
{
  if($memberUsernameErr=="" && $memberNameErr=="" && $memberGenderErr=="" && $memberAddressErr=="" && $memberEmailErr=="" &&  $memberHPErr=="" && $memberPasswordErr==""){
    
    echo "<script type='text/javascript'>alert('Member Register Successfully!')</script>";
  }
}

include('member_registeration.html')
?>