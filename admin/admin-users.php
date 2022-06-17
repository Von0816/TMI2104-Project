<?php include($_SERVER['DOCUMENT_ROOT']."/Project 1/connection.php"); ?>

<!DOCTYPE html>
    <head>
        <!-- <link rel="stylesheet" href="/main.css"> -->
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin-user.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <!-- <script src="/main.js"></script> -->
        <script src="admin.js"></script>
        <script src="admin-users.js"></script>
        <script>
            window.onload = () => {
                const adminUsername = document.getElementById("adminUsername");
                const adminPassword = document.getElementById("adminPassword");
            }
            function jsValidate() {
                const usernameVal = adminUsername.value.trim();
                const pswVal = adminPassword.value;
                if(usernameVal === ''){
                    setError(adminUsername, "Please enter admin username");
                    return false;
                }
                if(!validateString(adminUsername, usernameVal)){
                    return false;
                }
                if(pswVal === ''){
                    setError(adminPassword, "Please set admin password");
                    return false;
                } 
                if(!validatePassword(adminPassword, pswVal)){
                    return false;
                }

            }
            function setError(input, message){
            alert(message);
            input.focus();
            }
            function validateString(input, str){
            if(!(/^(\w\D\S)*$/)){
                setError(input, "Can only contains letters");
                return false;
            }
            return true;
            }
            function validatePassword(psw, val){
                if(!(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s)/.test(val))){
                setError(psw, "Password must contain at least one uppercase, one lowercase, one numeric and one special character. Must not contain whitespace");
                return false;
                }
                return true;
            }
        </script>

    </head>
    <body>
        <div id="sidebar">
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn active" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
        </div>
        <div class="mainbar" id="main-panel">
            <div class="table-container">
                <h1>Admin</h1>
                <form action="delAdmin.php" method="POST" id="delUser"></form>
                <form action="addAdmin.php" method="POST" id="addAdmin" onsubmit="return(jsValidate())"></form>
                <form action="editAdmin.php" method="POST" id="editAdmin"></form>
                <table id="admin-table">
                    <tr>
                        <th>Admin ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="adminID"  form="addAdmin" id="adminID">
                        </td>        
                        <td>
                            <input type="text" name="adminUsername" form="addAdmin" id="adminUsername">
                        </td>
                        <td>
                            <input type="password" name="adminPassword" form="addAdmin" id="adminPassword">
                        </td>
                        <td>
                            <button type="submit" form="addAdmin" name="submit" id="submit">Add Admin</button>
                        </td>
                    </tr>
                    <?php
                        $adminQuery  = "SELECT * FROM admin";
                        $result = mysqli_query($link, $adminQuery);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "  <tr id=".$row['adminID'].">
                                            <td>".$row['adminID']."</td>
                                            <td>".$row['adminUsername']."</td>
                                            <td>".$row['adminPassword']."</td>
                                            <td class='action-btn-group'>
                                                <div>
                                                    <button class='edit-btn' onclick="."edit(".$row['adminID'].","."'".$row['adminUsername']."'".","."'".$row['adminPassword']."'".")".">Edit</button>
                                                </div>
                                                <div>
                                                    <button class='del-btn' name='del-btn' form='delUser' value=".$row['adminID'].">Delete</button>
                                                </div>
                                            </td>
                                        </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
            <div class="table-container">
            <h1>Customer</h1>
                <table id="customer-table">
                    <tr>
                        <th>Member ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>HP</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $memberQuery  = "SELECT * FROM member";
                        $result = mysqli_query($link, $memberQuery);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo "  <tr id=".$row['memberID'].">
                                            <td>".$row['memberID']."</td>
                                            <td>".$row['memberUsername']."</td>
                                            <td>".$row['memberPassword']."</td>
                                            <td>".$row['memberName']."</td>
                                            <td>".$row['memberGender']."</td>
                                            <td>".$row['memberAddress']."</td>
                                            <td>".$row['memberEmail']."</tr>
                                            <td>".$row['memberHP']."</td>
                                            <td class='action-btn-group'>
                                                <button class='edit-btn' onclick='edit(".$row['memberID'].")'>Edit</button>
                                                <form method='POST' action='delUser.php'>
                                                    <button class='del-btn' name='del-btn' value=".$row['memberID'].">Delete</button>
                                                </form>
                                            </td>
                                        </tr>";
                            }
                        }
                    ?>
                </table>
            </div>
        </div>

        <script>
            function debug(){
                console.log("debug");
            }
        </script>
    </body>
</html>

<?php
$link->close();
?>