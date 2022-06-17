<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        
        /* --------------------------------------NAVIGATION BAR-------------------------------------- */

        nav {
            position: sticky;
            height: max-content;
            background-color: #201f1f;
            width: 100%;
            border-bottom: 1px solid black;
        }

        #nav-list {
            list-style-type: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-list-item {
            padding: 10px;
        }

        .align-self-end {
            margin-left: auto;
        }

        .nav-list-item a {
            text-decoration: none;
            color: white;
            font-size: larger;
        }

        #welcometext {
            text-decoration: none;
            color: white;
            font-size: larger;
            position:relative; 
            top:0px; 
            left:22%; 
            margin-left:500px; 
            margin-right:0px;
        }

        .nav-list-item button {
            font-size: larger;
            border-style: none;
            border-radius: 30px;
            cursor: pointer;
            background-color: #A3E4DB;
            padding: 10px 20px;
            color: white;
            margin: 8px 0;
            width: 100%;
        }

        .loginButton{
            position:fixed; 
            top:0px; 
            left:0px; 
            margin-left:85%; 
            margin-right:0px;
        }

        .nav-list-item button:hover {
            background-color: #90cfc7;
        }

        .nav-list-item .button {
            border-radius: 5px;
            opacity: 0.8;
        }

        .nav-list-item .button:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        #nav-logo {
            width: 100px;
        }

        /* --------------------------------------Login Form-------------------------------------- */

        /* Full-width input fields */
        input[type=text].loginDetail, input[type=password].loginDetail
        {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }


        /* set style and hover effect to login button and cancel*/
        .btn {
            background-color: #3e8e41;
            border: none;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            transition: 0.3s;
            cursor: pointer;
            width: 25%;
            
        }

        .btn:hover {
            background-color: #3e8e41;
            color: white;
        }


        span.password {
            float: right;
            padding-top: 16px;
        }



        /* The modal for login (background) */
        .loginModal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 10px;
        }


        /* login modal Content/Box */
        .loginModal-content {
            justify-content: center;
            background-color: #fefefe;
            border: 1px solid #888;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            width: 50%; /* Could be more or less, depending on screen size */
            height: 84%;
            padding-top: 50px;
            padding-right: 10px;
            padding-left: 180px;
        }


        /* The Close Button (x) */
        .close {
            position: absolute;
            margin: 6% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            right: 400px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }


        .close:hover, .close:focus {
            color: red;
            cursor: pointer;
        }


        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.7s;
            animation: animatezoom 0.7s;
        }


        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }


        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }


        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }	

    </style>

</head>

<body>
    <nav>
        <ul id="nav-list">
            <li class="nav-list-item">
                <a href="index.php">
                <img id="nav-logo" src="img/logo.png" alt="logo">
                </a>
            </li>
            <li class="nav-list-item">
                <a class="button" href="car-list.php">Car List</a>
            </li>
            <li class="nav-list-item">
                <a class="button" href="about-us.php">About Us</a>
            </li>
            <li class="nav-list-item">
                <a class="button" href="support.php">Support</a>
            </li>

            <li>
                <a id="welcomeText" >
                    <?php 
                    if (isset($_SESSION['username'])){
                        echo "Welcome,", $_SESSION['username']; 
                    }
                    else{
                        echo "";
                    }?>
                </a>
            </li>

            <li class="nav-list-item loginButton">
                <button onclick="document.getElementById('loginID').style.display='block'" class = "btn">Login</button>
            </li>

            <li class="nav-list-item align-self-end">
                <button onclick="myLogOutFunction()" class = "btn">Logout</button>
            </li>
        </ul>
    </nav>

    <div id="loginID" class="loginModal">

        <form class="loginModal-content animate" method = "post" action="login.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('loginID').style.display='none'" class="close" title="Close">&times;</span>
                <img src="img/loginAvatar.png" alt="Avatar" class="avatar" style="width:200px;height:180px;">
            </div>

            <br>

            <div class="containerLogin">
                <label for="username"><b>Username</b></label>
                <input type="text" class="loginDetail" placeholder="Enter Username" name="username" required>

                <br>
                <label for="password"><b>Password</b></label>
                <input type="password" class="loginDetail" placeholder="Enter Password" id= "myPassword" name="password" required>

                <br><br><br>

                <input type="submit" value="Login" class="btn btn-success" >
                <input type="btn" onclick="document.getElementById('loginID').style.display='none'" value="Cancel" class="btn btn-danger">

                <br><br>New member? Create new account <a href="signup.html" id="signup-link">here</a>
            </div>
        </form>
    </div>

   
</body>
</html>