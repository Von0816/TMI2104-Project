<?php
    
    include "connection.php"; 

    if(isset($_SESSION['userID'])){
    $sql = "SELECT * FROM member WHERE memberID = '".$_SESSION['userID']."' ";
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
              $_SESSION['userID'] = $row['memberID'];
              $memID = $_SESSION['userID'];
              $mUserName = $row['memberUsername'];
              $mName = $row['memberName'];
              $mGender = $row['memberGender'];
              $mAddr = $row['memberAddress'];
              $mEmail = $row['memberEmail'];
              $mHP = $row['memberHP'];
              $mPass = $row['memberPassword'];
            }   
          }
          else{
            echo '<script type="text/javascript">alert("You need to log in or register ...");
            window.location="indexMember.php";</script>';
          }
?>


<html>
    <head>
    <link rel="stylesheet" href="css/uDashboard.css">
    <script src="member-signup.js" defer></script>
    </head>
    <body>
    <section class="profile" id="profile">
    <div class="container">
      <div class="navigation">
        <ul>
          <li>
            <a href="#">
              <span class="icon"><ion-icon name="construct-outline"></ion-icon></span>
              <span class="title">LINGsCARs</span>
            </a>
          </li>
          <li>
            <a href="#profile">
              <span class="icon"><ion-icon name="people-circle-outline"></ion-icon></span>
              <span class="title">Personal info</span>
            </a>
          </li>
          <li>
            <a href="index.php">
              <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
              <span class="title">Back To Menu</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
</section>
    <!---->
    <div class="main">
      <div class='topbar'>
        <div class="toggle">
          <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">

        <?php 
                    if (isset($_SESSION['username'])){
                        echo "<br><h2>Welcome, ", $mUserName."</h2>"; 
                    }
                    else{
                        echo "<h2> Please login or register.</h2>";
                    }?>

        </div><br><br>
<div class="container2">
  <!--form name = "myForm" method = "post" action="editProfile_process.php"-->
  <form method="post" action="editProfile_process.php" enctype="multipart/form-data" name="myForm" id="member-signup-form" onsubmit="return jsValidate()">
  <h3>Update Profile</h3>
        <label for="memberUsername">User Name</label>
        <input type="text" name="memberUsername" id="usernameInput" value=<?php echo $mUserName?> ><br>
        <label for="memberName">Name</label>
        <input type="text" name="memberName" id="nameInput" value="<?php echo $mName?>" ><br>
        <label for="memberGender">Gender</label>
        <input type="text" name="memberGender" id="memberGender" value="<?php echo $mGender?>" ><br>  
        <label for="memberEmail">Email</label>
        <input type="text" name="memberEmail" id="emailInput" value="<?php echo $mEmail?>" ><br>
        <label for="memberAddress">Address</label>
        <input type="text" name="memberAddress" id="addressInput" value="<?php echo $mAddr?>" ><br>
        <label for="memberHP">Mobile Phone</label>
        <input type="text" name="memberHP" id="hpInput" value="<?php echo $mHP?>" ><br>
        <label for="memberPassword">Password</label>
        <input type="text" name="memberPassword" id="passwordInput" value="<?php echo $mPass?>" ><br>
  
    <input type="submit" name="update" value="Submit">
  </form>
</div>
    </body>
</html>

