<?php include("connection.php"); ?>

<html>
  <head>
	  <title>Member Registeration</title>
    <link rel="stylesheet" type="text/css" href="member_registeration.css">
    <script src="member-signup.js" defer></script>

</head>
<body>
  <header>
    <h1>Member Registeration</h1>
  </header>
  <section>
    <h2>Member Registeration</h2>
    <form method="post" action="signup.php" enctype="multipart/form-data" name="myForm" id="member-signup-form" onsubmit="return jsValidate()">
      <fieldset>
        <legend>Personal Information</legend>
        
        <div>
          <label for="memberUsername">Username</label>
          <input type="text" name="memberUsername" placeholder="Username" id="usernameInput">
        </div>
        <div>
          <label for="memberName">Full Name</label>
          <input type="text" name="memberName" placeholder="Full Name" id="nameInput">
        </div>
        <div>
          <label for="memberGender">Gender</label>
          <input type="radio" name="genderInput" id="male" value="male"> Male
          <input type="radio" name="genderInput" id="female"  value="female"> Female  
          <input type="radio" name="genderInput" id="other"  value="other"> Other
        </div>  
        <div>
          <label for="memberAddress">Address</label>
          <input type="text" name="memberAddress" placeholder="Address" id="addressInput">
        </div>  
        <div>
          <label for="memberEmail">Email Address</label>
          <input type="email" name="memberEmail" placeholder="gpitik@yahoo.com" id="emailInput">
        </div>
        <div>
          <label for="memberHP">Mobile number</label>
          <input type="tel" name="memberHP" placeholder="Mobile Number" id="hpInput">
          <small>eg. +44xxxxxxxx </small>
        </div>
        <div>
          <label for="memberPassword">Password</label>
          <input type="password" name="memberPassword" placeholder="Password" id="passwordInput">
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