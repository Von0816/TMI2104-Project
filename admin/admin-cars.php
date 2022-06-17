<?php  include("../connection.php") ?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" href="css/admin.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/admin-cars.js" defer></script>
    </head>
    <body>
        <div id="sidebar">
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn active" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
            <div class="sidebar-item sidebar-btn" id="payments-btn" onclick="btnClickListener('payments')">Payments</div>
        </div>
        <div class="mainbar" id="main-panel">
            <div class="table-container">
            <h1>Cars</h1>
                <form action="delete/delCar.php" method="POST" id="delCarForm"></form>
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
                        
                        if(isset($_POST['searchCarBtn'])){
                            $id = $_POST['searchCarID'];
                            $query  = "SELECT * FROM car WHERE carID = $id";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['carID'].">
                                                <td>".$row['carID']."</td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='name-".$row['carID']."' value='".$row['carName']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='body-".$row['carID']."' value='".$row['carBody']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='trim-".$row['carID']."' value='".$row['carTrim']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='fuel-".$row['carID']."' value='".$row['carFuel']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='bhp-".$row['carID']."' value='".$row['carBHP']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='gearbox-".$row['carID']."' value='".$row['carGearBox']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='paint-".$row['carID']."' value='".$row['carPaint']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='term-".$row['carID']."' value='".$row['carTerm']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='rate-".$row['carID']."' value='".$row['carMonthlyRate']."' disabled></td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick="."editCar(".$row['carID'].")>Edit</button>
                                                    <button class='del-btn' type='submit' name='del-btn' form='delCarForm' value=".$row['carID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                            
                            else {
                                echo "<script type='text/javascript'>alert('Car not found')</script>";$adminQuery  = "SELECT * FROM admin";
                                $query  = "SELECT * FROM car";
                                $result = mysqli_query($link, $query);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['carID'].">
                                                <td>".$row['carID']."</td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='name-".$row['carID']."' value='".$row['carName']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='body-".$row['carID']."' value='".$row['carBody']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='trim-".$row['carID']."' value='".$row['carTrim']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='fuel-".$row['carID']."' value='".$row['carFuel']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='bhp-".$row['carID']."' value='".$row['carBHP']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='gearbox-".$row['carID']."' value='".$row['carGearBox']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='paint-".$row['carID']."' value='".$row['carPaint']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='term-".$row['carID']."' value='".$row['carTerm']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='rate-".$row['carID']."' value='".$row['carMonthlyRate']."' disabled></td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick="."editCar(".$row['carID'].")>Edit</button>
                                                    <button class='del-btn' type='submit' name='del-btn' form='delCarForm' value=".$row['carID'].">Delete</button>
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
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='name-".$row['carID']."' value='".$row['carName']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='body-".$row['carID']."' value='".$row['carBody']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='trim-".$row['carID']."' value='".$row['carTrim']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='fuel-".$row['carID']."' value='".$row['carFuel']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='bhp-".$row['carID']."' value='".$row['carBHP']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='gearbox-".$row['carID']."' value='".$row['carGearBox']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='paint-".$row['carID']."' value='".$row['carPaint']."' disabled></td>
                                                <td><input type='text' class='no-border-input' form='editCarForm' name='term-".$row['carID']."' value='".$row['carTerm']."' disabled></td>
                                                <td><input type='number' class='no-border-input' form='editCarForm' name='rate-".$row['carID']."' value='".$row['carMonthlyRate']."' disabled></td>
                                                <td class='action-btn-group'>
                                                    <button class='edit-btn' onclick="."editCar(".$row['carID'].")>Edit</button>
                                                    <button class='del-btn' type='submit' name='del-btn' form='delCarForm' value=".$row['carID'].">Delete</button>
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
