<?php  include("connection.php") ?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="admin.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="admin.js"></script>
        <script src="admin-cars.js" defer></script>
    </head>
    <body>
        <div id="sidebar">
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn active" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
        </div>
        <div class="mainbar" id="main-panel">
            <div class="table-container">
            <h1>Cars</h1>
                <form action="delCar.php" method="POST" id="delCarForm"></form>
                <form action="addCar.php" method="POST" id="addCarForm"></form>
                <form action="editCar.php" method="POST" id="editCarForm"></form>
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
                        <td><button form="addCarForm" class="add-btn"  type="submit" name="submit" id="submit">Add Car</button></td>
                    </tr>
                    <?php
                        
                        if(isset($_POST['searchMemerBtn'])){
                            $id = $_POST['searchMemberID'];
                            $query  = "SELECT * FROM car WHERE carID = $id";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['carID'].">
                                                <td>".$row['carID']."</td>
                                                <td>".$row['carName']."</td>
                                                <td>".$row['carBody']."</td>
                                                <td>".$row['carTrim']."</td>
                                                <td>".$row['carFuel']."</td>
                                                <td>".$row['carBHP']."</td>
                                                <td>".$row['carGearBox']."</td>
                                                <td>".$row['carPaint']."</td>
                                                <td>".$row['carTerm']."</td>
                                                <td>".$row['carMonthlyRate']."</td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick='edit(".$row['carID'].")'>Edit</button>
                                                    <button form='delCarForm' class='del-btn' name='del-btn' value=".$row['carID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                            
                            else {
                                echo "<script type='text/javascript'>alert('Admin not found')</script>";$adminQuery  = "SELECT * FROM admin";
                                $query  = "SELECT * FROM car";
                                $result = mysqli_query($link, $query);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "  <tr id=".$row['carID'].">
                                                    <td>".$row['carID']."</td>
                                                    <td>".$row['carName']."</td>
                                                    <td>".$row['carBody']."</td>
                                                    <td>".$row['carTrim']."</td>
                                                    <td>".$row['carFuel']."</td>
                                                    <td>".$row['carBHP']."</td>
                                                    <td>".$row['carGearBox']."</td>
                                                    <td>".$row['carPaint']."</td>
                                                    <td>".$row['carTerm']."</td>
                                                    <td>".$row['carMonthlyRate']."</td>
                                                    <td class='action-btn-group'>
                                                        <button class='edit-btn' onclick='edit(".$row['carID'].")'>Edit</button>
                                                        <button form='delCarForm' class='del-btn' name='del-btn' value=".$row['carID'].">Delete</button>
                                                    </td>
                                                </tr>";
                                    }
                                }
                            }
                        }
                        
                        else{
                            $query  = "SELECT * FROM car";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['carID'].">
                                                <td>".$row['carID']."</td>
                                                <td>".$row['carName']."</td>
                                                <td>".$row['carBody']."</td>
                                                <td>".$row['carTrim']."</td>
                                                <td>".$row['carFuel']."</td>
                                                <td>".$row['carBHP']."</td>
                                                <td>".$row['carGearBox']."</td>
                                                <td>".$row['carPaint']."</td>
                                                <td>".$row['carTerm']."</td>
                                                <td>".$row['carMonthlyRate']."</td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick='edit(".$row['carID'].")'>Edit</button>
                                                    <button form='delCarForm' class='del-btn' name='del-btn' value=".$row['carID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
