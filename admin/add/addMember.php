<?php
    include("../../connection.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $memberID = filterInput($_POST['memberID']);
        $memberUsername = filterInput($_POST['memberUsername']);
        $memberPassword = filterInput($_POST['memberPassword']);
        $memberName =filterInput($_POST['memberName']);
        $memberGender =filterInput($_POST['memberGender']);
        $memberAddress = filterInput($_POST['memberAddress']);    
        $memberEmail = filterInput($_POST['memberEmail']);
        $memberHP =filterInput($_POST['memberHP']);

        $query = "SELECT * FROM member WHERE memberID = $memberID";
                $memberCheck = mysqli_query($link, $query);
                if($memberCheck->num_rows == 0){
        $sql = "INSERT INTO member(memberID, memberUsername, memberName, memberGender, memberAddress, memberEmail, memberHP, memberPassword) VALUES('$memberID', '$memberUsername', '$memberName', '$memberGender', '$memberAddress', '$memberEmail', '$memberHP', '$memberPassword')";
                    $result = mysqli_query($link, $sql);
                    if($result){
                        header('Location: ../admin-users.php?Message='.urlencode('Member added'));
                    }
                    else {
                        header('Location: ../admin-users.php?Message='.urlencode('Failed to add member'));
                    }
                }
                else {                    
                    header('Location: ../admin-users.php?Message='.urlencode('Member already existed'));
                }

    }
    function filterInput($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }

?>