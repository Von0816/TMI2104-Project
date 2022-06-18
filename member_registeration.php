<?php include("connection.php"); ?>

<html>
  <head>
	  <title>Member Registeration</title>
    <link rel="stylesheet" type="text/css" href="member_registeration.css">
	  <script src="member_registeration.js"></script>

</head>
<body>
  <header>
    <h1>Member Registeration</h1>
  </header>
  <section>
    <h2>Member Registeration</h2>
    <form method="post" action="member_registeration_conn.php" enctype="multipart/form-data" name="myForm" onsubmit="return jsValidate()">
      <fieldset>
        <legend>Personal Information</legend>
        
        <div>
          <label for="memberUsername">Username</label>
          <input type="text" name="memberUsername" placeholder="Username" id="<?php echo $memberUsername; ?>">
        </div>
        <div>
          <label for="memberName">Full Name</label>
          <input type="text" name="memberName" placeholder="Full Name" id="<?php echo $memberName; ?>">
        </div>
        <div>
          <label for="memberGender">Gender</label>
          <input type="radio" name="memberGender" value="Male"> Male
          <input type="radio" name="memberGender"  value="Female"> Female  
          <input type="radio" name="memberGender"  value="Other"> Other
        </div>  
        <div>
          <label for="memberAddress">Address</label>
          <input type="text" name="memberAddress" placeholder="Address" id="<?php echo $memberAddress; ?>">
        </div>  
        <div>
          <label for="memberEmail">Email Address</label>
          <input type="email" name="memberEmail" placeholder="gpitik@yahoo.com" id="<?php echo $memberEmail; ?>">
        </div>
        <div>
          <label for="memberHP">Mobile number</label>
          <input type="tel" name="memberHP" placeholder="Mobile Number" id="<?php echo $memberHP; ?>">
          <small>eg. +44xxxxxxxx </small>
        </div>
        <div>
          <label for="memberPassword">Password</label>
          <input type="password" name="memberPassword" placeholder="Password" id="<?php echo $memberPassword; ?>">
        </div>
      </fieldset>
      <div class="center">
        <input type="submit" name="btnSubmit" value="Register">
        <input type="reset" name="btnReset" value="Clear">
      </div>
    </form>
    <a href="">Back to Main Page</a>
  </section>
  <footer>
  </footer>
</body>
</html>
