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
              $mUserName = $row['username'];
              $mName = $row['name'];
              $mAddr = $row['address'];
              $mEmail = $row['email'];
              $mHP = $row['hp'];
              $mPass = $row['password'];
            }   
          }
          else{
            echo '<script type="text/javascript">alert("You need to log in or register ...");
            window.location="index.php";</script>';
          }
?>


<html>
    <head>
    <link rel="stylesheet" href="css/Udashboard.css">
    <link rel="stylesheet" href="css/main.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style> 
    <script src="signup/signup.js" defer></script>
    </head>
    <body>
    <div id="sidebar">
            <div class="sidvar-item logout-btn" onclick="window.location.href ='logout.php'">Logout</div>
            <h1>User Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="window.location.href ='index.php'">Home</div> 
            <div class="sidebar-item sidebar-btn active" id="users-btn" onclick="window.location.href ='#profile'">Profile</div>
        </div>

<div class="mainbar" id="main-panel">
  
            <div class="table-container">
            <h1 style="text-align: center;">Update Profile</h1>
            <form method="post" action="editProfile_process.php" enctype="multipart/form-data" name="myForm" id="signup-form">
            <label for="memberUsername">User Name</label>
              <input type="text" name="username" id="usernameInput" value=<?php echo $mUserName?> ><br>
              <label for="memberName">Name</label>
              <input type="text" name="mame" id="nameInput" value="<?php echo $mName?>" ><br>
              <label for="memberEmail">Email</label>
              <input type="text" name="email" id="emailInput" value="<?php echo $mEmail?>" ><br>
              <label for="memberAddress">Address</label>
              <input type="text" name="address" id="addressInput" value="<?php echo $mAddr?>" ><br>
              <label for="memberHP">Mobile Phone</label>
              <input type="text" name="hp" id="hpInput" value="<?php echo $mHP?>" ><br>
              <label for="memberPassword">Password</label>
              <input type="text" name="password" id="passwordInput" value="<?php echo $mPass?>" ><br>
        
          <input type="submit" name="update" value="Submit">
  </form> 
            </div>
        </div>
    </body>
</html>

