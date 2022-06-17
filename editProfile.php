<?php //include("navBarIndex.php"); 

include "connection.php";


//$mID = $_SESSION['memberID'];
$mID = 1;//TESTING DB AJAK

$sql = "SELECT * FROM member WHERE memberID = '$mID'";
$result = $link->query($sql);

while($rows = $result->fetch_array()){
    $mUserName = $rows['memberUsername'];
    $mName = $rows['memberName'];
    $mGender = $rows['memberGender'];
    $mAddr = $rows['memberAddress'];
    $mEmail = $rows['memberEmail'];
    $mHP = $rows['memberHP'];
    $mPass = $rows['memberPassword'];
}
mysqli_close($link);
include("navBarIndex.php"); 
?>
<br>

<html>
    <body>
        <head>
            <style>
                body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                }
            </style>
        </head>
        <header><h1>Update Member</h1></header>
        <form method = "post" action="editProfile_process.php">
        <div>
            <label for="memberUsername">User Name</label>
            <input type="text" name="memberUsername" id="memberUsername" value=<?php echo $mUserName?> >
        </div>
        <div>
            <label for="memberName">Name</label>
            <input type="text" name="memberName" id="memberName" value=<?php echo $mName?> >
        </div>
        <div>
            <label for="memberGender">Gender</label>
            <input type="text" name="memberGender" id="memberGender" value=<?php echo $mGender?> >
        </div>
        <div>
            <label for="memberAddress">Address</label>
            <input type="text" name="memberAddress" id="memberAddress" value=<?php echo $mAddr?> >
        </div>
        <div>
            <label for="memberEmail">Email</label>
            <input type="text" name="memberEmail" id="memberEmail" value=<?php echo $mEmail?> >
        </div>
        <div>
            <label for="memberHP">Mobile Phone</label>
            <input type="text" name="memberHP" id="memberHP" value=<?php echo $mAddr?> >
        </div>
        <div>
            <label for="memberPassword">Password</label>
            <input type="text" name="memberPassword" id="memberPassword" value=<?php echo $mPass?> >
        </div>

        <input type="submit" name="update" value="Update">
        </form>
    </body>
</html>

