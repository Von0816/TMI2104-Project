<?php 
    include("../connection.php"); 
    include("auth.php");
?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" href="css/admin.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="js/admin.js"></script>
        <script src="js/admin-bookings.js"></script>
    </head>
    <body>
        <div id="sidebar">
            <div class="sidvar-item logout-btn" onclick="btnClickListener('logout')">Logout</div>
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn active" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
            <div class="sidebar-item sidebar-btn" id="payments-btn" onclick="btnClickListener('payments')">Payments</div>

        </div>
        <div class="mainbar" id="main-panel">
            <div class="table-container">
            <h1>Bookings</h1>
                <form action="edit/editBooking.php" method="POST" id="editBookingForm"></form>
                <form action="delete/delBooking.php" method="POST" id="delBookingForm"></form>
                <form class="search-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="number" name="searchBookingID" required>
                    <button type="submit" name="searchBookingBtn">Search</button>
                </form>
                <table id="bookings-table">
                    <tr>
                        <th>Booking ID</th>
                        <th>Member ID</th>
                        <th>Car ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        
                        if(isset($_POST['searchBookingBtn'])){
                            $id = $_POST['searchBookingID'];
                            $search = "SELECT * FROM booking where bookingID = $id";
                            $result = mysqli_query($link, $search);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id='booking-".$row['bookingID']."'>
                                                <td>".$row['bookingID']."</td>
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['carID']."</td>
                                                <td>".$row['bookingDate']."</td>
                                                <td>".$row['bookingTime']."</td>
                                                <td>
                                                    <select class='no-border-input' name='bookingStatus-".$row['bookingID']."' form='editBookingForm' disabled>
                                                        <option value='pending'"; if($row['bookingStatus'] == 'pending') {echo "selected";} echo ">Pending</option>
                                                        <option value='completed'"; if($row['bookingStatus'] == 'completed') {echo "selected";} echo ">Completed</option>
                                                        <option value='cancelled'"; if($row['bookingStatus'] == 'cancelled') {echo "selected";} echo ">Cancelled</option>
                                                    </select>
                                                </td>
                                                <td class='action-btn-group'>
                                                        <button class='edit-btn' onclick="."editBooking('booking-".$row['bookingID']."',".$row['bookingID'].")>Edit</button>
                                                        <button class='del-btn' type='submit' name='del-btn' form='delBookingForm' value=".$row['bookingID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                            else {
                                echo "<script type='text/javascript'>alert('Booking not found')</script>";
                                $query  = "SELECT * FROM booking";
                                $result = mysqli_query($link, $query);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    echo "  <tr id='booking-".$row['bookingID']."'>
                                                <td>".$row['bookingID']."</td>
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['carID']."</td>
                                                <td>".$row['bookingDate']."</td>
                                                <td>".$row['bookingTime']."</td>
                                                <td>
                                                    <select class='no-border-input' name='bookingStatus-".$row['bookingID']."' form='editBookingForm' disabled>
                                                        <option value='pending'"; if($row['bookingStatus'] == 'pending') {echo "selected";} echo ">Pending</option>
                                                        <option value='completed'"; if($row['bookingStatus'] == 'completed') {echo "selected";} echo ">Completed</option>
                                                        <option value='cancelled'"; if($row['bookingStatus'] == 'cancelled') {echo "selected";} echo ">Cancelled</option>
                                                    </select>
                                                </td>
                                                <td class='action-btn-group'>
                                                        <button class='edit-btn' onclick="."editBooking('booking-".$row['bookingID']."',".$row['bookingID'].")>Edit</button>
                                                        <button class='del-btn' type='submit' name='del-btn' form='delBookingForm' value=".$row['bookingID'].">Delete</button>
                                                </td>
                                            </tr>";
                                    }
                            }
                            }
                        }
                        else{
                            $query  = "SELECT * FROM booking";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id='booking-".$row['bookingID']."'>
                                                <td>".$row['bookingID']."</td>
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['carID']."</td>
                                                <td>".$row['bookingDate']."</td>
                                                <td>".$row['bookingTime']."</td>
                                                <td>
                                                    <select class='no-border-input' name='bookingStatus-".$row['bookingID']."' form='editBookingForm' disabled>
                                                        <option value='pending'"; if($row['bookingStatus'] == 'pending') {echo "selected";} echo ">Pending</option>
                                                        <option value='completed'"; if($row['bookingStatus'] == 'completed') {echo "selected";} echo ">Completed</option>
                                                        <option value='cancelled'"; if($row['bookingStatus'] == 'cancelled') {echo "selected";} echo ">Cancelled</option>
                                                    </select>
                                                </td>
                                                <td class='action-btn-group'>
                                                        <button class='edit-btn' onclick="."editBooking('booking-".$row['bookingID']."',".$row['bookingID'].")>Edit</button>
                                                        <button class='del-btn' type='submit' name='del-btn' form='delBookingForm' value=".$row['bookingID'].">Delete</button>
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
