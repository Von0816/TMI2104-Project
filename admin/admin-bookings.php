<?php include("../connection.php") ?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../main.css">
        <link rel="stylesheet" href="css/admin.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="main.js"></script>
        <script src="js/admin.js"></script>
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
                <form action="delete/delBooking.php" method="POST" id="delBookingForm"></form>
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
                            $query  = "SELECT * FROM booking";
                            $result = mysqli_query($link, $query);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                    echo "  <tr id=".$row['bookingID'].">
                                                <td>".$row['bookingID']."</td>
                                                <td>".$row['memberID']."</td>
                                                <td>".$row['carID']."</td>
                                                <td>".$row['bookingDate']."</td>
                                                <td>".$row['bookingTime']."</td>
                                                <td>".$row['bookingStatus']."</td>
                                                <td class='action-btn-group'>
                                                    <button form='delCarForm' class='del-btn' name='del-btn' value=".$row['carID'].">Delete</button>
                                                </td>
                                            </tr>";
                                }
                            }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
