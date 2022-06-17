<?php 
    include("connection.php"); 
?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="admin-user.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="admin.js"></script>
        <script src="admin-users.js" defer></script>
        <script>
            window.onload = () => {

                // const member
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
                <form action="delAdmin.php" method="POST" id="delAdminForm"></form>
                <form action="addAdmin.php" method="POST" id="addAdminForm"></form>
                <form action="editAdmin.php" method="POST" id="editAdminForm"></form>
                <form class="search-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="number" name="searchAdminID" id="searchMemberID" required>
                    <button type="submit" name="searchAdminBtn">Search</button>
                </form>
                <table id="admin-table">
                    <tr>
                        <th>Admin ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="adminID"  form="addAdminForm" id="adminID">
                        </td>        
                        <td>
                            <input type="text" name="adminUsername" form="addAdminForm" id="adminUsername">
                        </td>
                        <td>
                            <input type="password" name="adminPassword" form="addAdminForm" id="adminPassword">
                        </td>
                        <td>
                            <button type="submit" class="add-btn" form="addAdminForm" name="submit" id="submit">Add Admin</button>
                        </td>
                    </tr>
                    <?php
                        
                        if(isset($_POST['searchAdminBtn'])){
                            $id = $_POST['searchAdminID'];
                            $search = "SELECT * FROM admin where adminID = $id";
                            $result = mysqli_query($link, $search);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['adminID'].">
                                                        <td>".$row['adminID']."</td>
                                                        <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminUsername' id='editAdminUsername' value=".$row['adminUsername']." disabled></input></td>
                                                        <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminPassword' id='editAdminPassword' value=".$row['adminPassword']." disabled></input></td>
                                                        <td class='action-btn-group'>
                                                                <button class='edit-btn' onclick="."edit(".$row['adminID'].")>Edit</button>
                                                                <button class='del-btn' type='submit' name='del-btn' form='delAdminForm' value=".$row['adminID'].">Delete</button>
                                                        </td>
                                                    </tr>";
                                }
                            }
                            else {
                                echo "<script type='text/javascript'>alert('Admin not found')</script>";$adminQuery  = "SELECT * FROM admin";
                                $result = mysqli_query($link, $adminQuery);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "  <tr id=".$row['adminID'].">
                                                    <td>".$row['adminID']."</td>
                                                    <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminUsername' id='editAdminUsername' value=".$row['adminUsername']." disabled></input></td>
                                                    <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminPassword' id='editAdminPassword' value=".$row['adminPassword']." disabled></input></td>
                                                    <td class='action-btn-group'>
                                                            <button class='edit-btn' onclick="."edit(".$row['adminID'].")>Edit</button>
                                                            <button class='del-btn' type='submit' name='del-btn' form='delAdminForm' value=".$row['adminID'].">Delete</button>
                                                    </td>
                                                </tr>";
                                    }
                            }
                            }
                        }
                        else{
                            $adminQuery  = "SELECT * FROM admin";
                            $result = mysqli_query($link, $adminQuery);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['adminID'].">
                                                <td>".$row['adminID']."</td>
                                                <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminUsername' id='editAdminUsername' value=".$row['adminUsername']." disabled></input></td>
                                                <td><input type='text' class='no-border-input' form='editAdminForm' name='editAdminPassword' id='editAdminPassword' value=".$row['adminPassword']." disabled></input></td>
                                                <td class='action-btn-group'>
                                                        <button class='edit-btn' onclick="."edit(".$row['adminID'].")>Edit</button>
                                                        <button class='del-btn' type='submit' name='del-btn' form='delAdminForm' value=".$row['adminID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                        }
                    ?>
                </table>
            </div>
            <div class="table-container">
            <h1>Customer</h1>
                <form action="delMember.php" method="POST" id="delMemberForm"></form>
                <form action="addMember.php" method="POST" id="addMemberForm"></form>
                <form action="editMember.php" method="POST" id="editMemberForm"></form>
                <form class="search-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="number" name="searchMemberID" id="searchMemberID" required>
                    <button type="submit" name="searchMemberBtn">Search</button>
                </form>
                <table id="member-table">
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
                    <tr>
                        <td><input form="addMemberForm" type="number" name="memberID" id="memberID"></td>
                        <td><input form="addMemberForm" type="text" name="memberUsername" id="memberUsername"></td>
                        <td><input form="addMemberForm" type="password" name="memberPassword" id="memberPassword"></td>
                        <td><input form="addMemberForm" type="text" name="memberName" id="memberName"></td>
                        <td><input form="addMemberForm" type="text" name="memberGender" id="memberGender"></td>
                        <td><input form="addMemberForm" type="text" name="memberAddress" id="memberAddress"></td>
                        <td><input form="addMemberForm" type="email" name="memberEmail" id="memberEmail"></td>
                        <td><input form="addMemberForm" type="text" name="memberHP" id="memberHP"></td>
                        <td><button form="addMemberForm" class="add-btn"  type="submit" name="submit" id="submit">Add Member</button></td>
                    </tr>
                    <?php
                        
                        if(isset($_POST['searchMemerBtn'])){
                            $id = $_POST['searchMemberID'];
                            $query = "SELECT * FROM member WHERE memberID = $id";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['memberID'].">
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['memberUsername']."</td>
                                                <td>".$row['memberPassword']."</td>
                                                <td>".$row['memberName']."</td>
                                                <td>".$row['memberGender']."</td>
                                                <td>".$row['memberAddress']."</td>
                                                <td>".$row['memberEmail']."</td>
                                                <td>".$row['memberHP']."</td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick='edit(".$row['memberID'].")'>Edit</button>
                                                    <button form='delMemberForm' class='del-btn' name='del-btn' value=".$row['memberID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                            
                            else {
                                echo "<script type='text/javascript'>alert('Admin not found')</script>";$adminQuery  = "SELECT * FROM admin";
                               $result = mysqli_query($link, $query);
                                if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['memberID'].">
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['memberUsername']."</td>
                                                <td>".$row['memberPassword']."</td>
                                                <td>".$row['memberName']."</td>
                                                <td>".$row['memberGender']."</td>
                                                <td>".$row['memberAddress']."</td>
                                                <td>".$row['memberEmail']."</td>
                                                <td>".$row['memberHP']."</td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick='edit(".$row['memberID'].")'>Edit</button>
                                                    <button form='delMemberForm' class='del-btn' name='del-btn' value=".$row['memberID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                        }
                    }
                        
                        else{
                            $query  = "SELECT * FROM member";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['memberID'].">
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['memberUsername']."</td>
                                                <td>".$row['memberPassword']."</td>
                                                <td>".$row['memberName']."</td>
                                                <td>".$row['memberGender']."</td>
                                                <td>".$row['memberAddress']."</td>
                                                <td>".$row['memberEmail']."</td>
                                                <td>".$row['memberHP']."</td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick='edit(".$row['memberID'].")'>Edit</button>
                                                    <button form='delMemberForm' class='del-btn' name='del-btn' value=".$row['memberID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
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