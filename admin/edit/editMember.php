<?php
    include("../../connection.php");

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $memberID = filterInput($_POST["updateMember"]);
        $memberUsername= filterInput($_POST["memberUsername-$memberID"]);
        $memberPassword = filterInput($_POST["memberPassword-$memberID"]); 
        $memberName = filterinput($_POST["name-$memberID"]);
        $memberGender = filterinput($_POST["gender-$memberID"]);
        $memberAddress = filterinput($_POST["address-$memberID"]);
        $memberEmail = filterinput($_POST["email-$memberID"]);
        $memberHP = filterinput($_POST["HP-$memberID"]);

        if(empty($memberID)){
            $error .= "Member ID cannot be blank\\n";
        }
        else if(!preg_match("/^[0-9]*$/", $memberID)){
            $error .= "Member ID can only contains number\\n";
        }
        if(empty($memberUsername)){
            $error .= "Member Username cannot be blank\\n";
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/", $memberUsername)){
            $error .= "Member username can only be alphanumerical\\n";
        }
        if(empty($memberPassword)){
            $error .= "Member Password cannot be blank\\n";
        }
        else if(strlen($memberPassword) != 6){
            $error .= "Member Password must be 6 character long \\n";
        }
        else if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/", $memberPassword)){
          $error .= "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace\\n";
        }
        if(empty($memberName)){
            $error .= "Member name cannot be blank\\n";
        }
        else if(!preg_match("/^[a-zA-Z\s]*$/", $memberName)){
            $error .= "Member name connot contains symbols and digits\\n";
        }
        if(empty($memberGender)){
            $error .= "Member gender cannot be blank\\n";
        }
        else if(!preg_match("/^[a-zA-Z]*$/", $memberGender)){
            $error .= "Enter a valid gender\\n";
        }
        if(empty($memberAddress)){
            $error .= "Member address cannot be blank\\n";
        }
        if(empty($memberEmail)){
            $error .= "Member email cannot be blank\\n";
        }
        else if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $memberEmail)){
            $error .= "Enter a valid email\\n";
        }
        if(empty($memberHP)){
            $error .= "Member HP cannot be blank\\n";
        }
        else if(!preg_match("/^\+(\d{2})(\d{5,13}$)/", $memberHP)){
            $error .= "Enter a valid HP";
        }
        if(empty($error)){
            $sql = "UPDATE member SET 
                        memberUsername = '$memberUsername',
                        memberPassword = '$memberPassword',
                        memberName = '$memberName',
                        memberGender = '$memberGender',
                        memberAddress = '$memberAddress',
                        memberEmail = '$memberEmail',
                        memberHP = '$memberHP'
                    WHERE memberID = $memberID";

            $result = mysqli_query($link,$sql);

            if($result){
                echo "<script type='text/javascript'>alert('Member Edited')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
            else {
                echo "<script type='text/javascript'>alert('Failed')</script>";
                echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
            }
        }
        else {
            handleError($error);
        }


    }

    function handleError($msg){
            echo "<script type='text/javascript'>alert('".$msg."')</script>";
            echo "<script type='text/javascript'>window.location.replace('../admin-users.php')</script>";
    }

    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }


    
?>