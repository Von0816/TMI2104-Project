<?php
    
    include "connection.php"; 

    if(isset($_SESSION['userID'])){
    $sql = "SELECT * FROM member WHERE memberID = ".$_SESSION['userID'];
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
              $_SESSION['userID'] = $row['memberID'];
              $memID = $_SESSION['userID'];
              $mUserName = $row['memberUsername'];
              $mName = $row['memberName'];
              $mAddr = $row['memberAddress'];
              $mEmail = $row['memberEmail'];
              $mHP = $row['memberHP'];
              $mPass = $row['memberPassword'];
            }   
          }
          else{
            echo '<script type="text/javascript">alert("You need to log in or register ...");
            window.location="index.php";</script>';
          }
      mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/uDashboard.css">
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
              <form action="editProfile.php" method="POST" enctype="multipart/form-data" id="signup-form">
                <div class="form-el">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?php echo $mUserName?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <label for="name">Full name</label>
                    <input type="text" name="name" id="name" value="<?php echo $mName?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $mEmail?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $mAddr?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <label for="hp">Phone number</label>
                    <input type="tel" name="hp" id="hp" value="<?php echo $mHP?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <div>
                        <label for="password">Password</label>
                        <p id="pswVis">Show</p>
                    </div>
                    <input type="password" name="password" id="password" value="<?php echo $mPass?>" required>
                    <small class="errorMsg"></small>
                </div>
                <div class="form-el">
                    <button type="submit" name="update" id="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>

