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
?>


<html>
    <head>
    <link rel="stylesheet" href="css/Udashboard.css">
    <link rel="stylesheet" href="css/main.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style> 
    <script src="member-signup.js" defer></script>
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
            <form method="post" action="editProfile_process.php" enctype="multipart/form-data" name="myForm" id="member-signup-form" onsubmit="return jsValidate()">
            <label for="memberUsername">User Name</label>
              <input type="text" name="memberUsername" id="usernameInput" value=<?php echo $mUserName?> ><br>
              <label for="memberName">Name</label>
              <input type="text" name="memberName" id="nameInput" value="<?php echo $mName?>" ><br>
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
            <!--form action="delete/delCar.php" method="POST" id="delCarForm"></form>
                <form action="add/addCar.php" method="POST" id="addCarForm"></form>
                <form action="edit/editCar.php" method="POST" id="editCarForm"></form>
                <form class="search-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="number" name="searchCarID" id="searchCarID">
                    <button type="submit" name="searchCarBtn">Search</button>
                </form>
                <table id="cars-table">
                    <tr>
                        <th>Car ID</th>
                        <th>Name</th>
                        <th>Body</th>
                        <th>Trim</th>
                        <th>Fuel</th>
                        <th>BHP</th>
                        <th>GearBox</th>
                        <th>Paint</th>
                        <th>Term</th>
                        <th>Monthly Rate</th>
                        <th>Car Img</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><input form="addCarForm" type="number" name="carID" id="carID"></td>
                        <td><input form="addCarForm" type="text" name="carName" id="carName"></td>
                        <td><input form="addCarForm" type="text" name="carBody" id="carBody"></td>
                        <td><input form="addCarForm" type="text" name="carTrim" id="carTrim"></td>
                        <td><input form="addCarForm" type="text" name="carFuel" id="carFuel"></td>
                        <td><input form="addCarForm" type="number" name="carBHP" id="carBHP"></td>
                        <td><input form="addCarForm" type="text" name="carGearBox" id="carGearBox"></td>
                        <td><input form="addCarForm" type="text" name="carPaint" id="carPaint"></td>
                        <td><input form="addCarForm" type="text" name="carTerm" id="carTerm"></td>
                        <td><input form="addCarForm" type="number" name="carMonthlyRate" id="carMonthlyRate"></td>
                        <td><input type='text' form='editCarForm' name="imgPath"></td>
                        <td><button form="addCarForm" class="add-btn"  type="submit" name="submit" id="submit">Add Car</button></td>
                    </tr>

                </table-->
            </div>
        </div>
    </body>
</html>

