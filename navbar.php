<link rel="stylesheet" href="css/navbar.css">
<style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style> 
<script src="js/navbar.js"></script>
<nav>
    <div class="nav-item">
        <a href="checkNavBarLogo.php">
        <img id="nav-logo" src="img/logo.png" onclick="imageProfile()" alt="logo">
        </a>
    </div>
    <div class="nav-item">
        <a class="nav-btn" href="car-list.php">Car List</a>
    </div>
    <div class="nav-item">
        <a class="nav-btn" href="about-us.php">About Us</a>
    </div>
    <div class="nav-item">
        <a class="nav-btn" href="support.php">Support</a>
    </div>
    <div class="nav-item" id="end">
        <div class="nav-item">
            <img id="cart-btn" src="img/cart-shopping-solid.svg" alt="">
        </div>
        <?php 
            if(!isset($_SESSION['userID'])){
                echo    "<div class='nav-item'>
                            <a class='nav-btn' id='login-btn' href='login/login.html'>Login</a>
                        </div>";    
            }
            else {

                if($_SESSION["accLevel"] == "admin"){
                    echo    "<div class='nav-item'>
                                <div class='dropdown'>
                                    <button id='dropdown-btn' >Profile</button>
                                    <div id='dropdown-list' class='dropdown-list'>
                                        <p id='dropdown-greet' >Welcome, ".$_SESSION['username']."</p>
                                        <a class='dropdown-item' href='indexAdmin.php' >Dashboard</a>
                                        <a class='dropdown-item' id='logout-btn' href='logout.php'>Logout</a>
                                    </div>
                                </div>
                            </div>";                       
                }
                if($_SESSION["accLevel"] == "member") {
                    echo    "<div class='nav-item'>
                                <div class='dropdown'>
                                    <button id='dropdown-btn' >Profile</button>
                                    <div id='dropdown-list' class='dropdown-list'>
                                        <p id='dropdown-greet' >Welcome, ".$_SESSION['username']."</p>
                                        <a class='dropdown-item' href='userDashboard.php' >Dashboard</a>
                                        <a class='dropdown-item' id='logout-btn' href='logout.php'>Logout</a>
                                    </div>
                                </div>
                            </div>";        
                }

            }
        ?>
    </div>


</nav>