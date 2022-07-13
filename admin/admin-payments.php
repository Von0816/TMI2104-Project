<?php 
    include("../connection.php"); 
    include("auth.php");
?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="css/admin.css">
        <style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
        <script src="js/admin.js"></script>
    </head>
    <body>
        <div id="sidebar">
            <div class="sidvar-item logout-btn" onclick="btnClickListener('logout')">Logout</div>
            <h1>Admin Dashboard</h1>
            <div class="sidebar-item sidebar-btn" id="analytics-btn" onclick="btnClickListener('analytics')">Analytics</div> 
            <div class="sidebar-item sidebar-btn" id="users-btn" onclick="btnClickListener('users')">Users</div>
            <div class="sidebar-item sidebar-btn" id="cars-btn" onclick="btnClickListener('cars')">Cars</div>
            <div class="sidebar-item sidebar-btn" id="bookings-btn" onclick="btnClickListener('bookings')">Bookings</div>
            <div class="sidebar-item sidebar-btn active" id="payments-btn" onclick="btnClickListener('payments')">Payments</div>
        </div>
        <div class="mainbar" id="main-panel">
            <div class="table-container">
            <h1>Bookings</h1>
                <form action="delete/delPayment.php" method="POST" id="delPaymentForm"></form>
                <form class="search-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="number" name="searchPaymentID" required>
                    <button type="submit" name="searchPaymentBtn">Search</button>
                </form>
                <table id="payments-table">
                    <tr>
                        <th>Payment ID</th>
                        <th>Booking ID</th>
                        <th>Timestamp</th>
                        <th>Payment Method</th>
                        <th>F. Name</th>
                        <th>L. Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>NoC</th>
                        <th>Card No.</th>
                        <th>Card Exp Mth</th>
                        <th>Card Exp Yr</th>
                        <th>CVV</th>
                    </tr>
                    <?php
                            if(isset($_POST['searchPaymentBtn'])){
                                $id = $_POST['searchPaymentID'];
                                $search = "SELECT * FROM payment where paymentID = $id";
                                $result = mysqli_query($link, $search);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "  <tr id=".$row['paymentID'].">
                                                    <td>".$row['paymentID']."</td>
                                                    <td>".$row['bookingID']."</td>
                                                    <td>".$row['paymentDateTime']."</td>
                                                    <td>".$row['paymentMethod']."</td>
                                                    <td>".$row['billing_fName']."</td>
                                                    <td>".$row['billing_lName']."</td>
                                                    <td>".$row['billing_email']."</td>
                                                    <td>".$row['billing_addr']."</td>
                                                    <td>".$row['billing_city']."</td>
                                                    <td>".$row['billing_state']."</td>
                                                    <td>".$row['nameOnCard']."</td>
                                                    <td>".$row['cardNum']."</td>
                                                    <td>".$row['cardEXPmonth']."</td>
                                                    <td>".$row['cardEXPyear']."</td>
                                                    <td>".$row['card_CVV']."</td>
                                                    <td class='action-btn-group'>
                                                        <button form='delPaymentForm' class='del-btn' name='del-btn' value=".$row['paymentID'].">Delete</button>
                                                    </td>
                                                </tr>";
                                    }
                                }
                                else {
                                    echo "<script type='text/javascript'>alert('Payment not found')</script>";
                                    $query  = "SELECT * FROM payment";
                                    $result = mysqli_query($link, $query);
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "  <tr id=".$row['paymentID'].">
                                                        <td>".$row['paymentID']."</td>
                                                        <td>".$row['bookingID']."</td>
                                                        <td>".$row['paymentDateTime']."</td>
                                                        <td>".$row['paymentMethod']."</td>
                                                        <td>".$row['billing_fName']."</td>
                                                        <td>".$row['billing_lName']."</td>
                                                        <td>".$row['billing_email']."</td>
                                                        <td>".$row['billing_addr']."</td>
                                                        <td>".$row['billing_city']."</td>
                                                        <td>".$row['billing_state']."</td>
                                                        <td>".$row['nameOnCard']."</td>
                                                        <td>".$row['cardNum']."</td>
                                                        <td>".$row['cardEXPmonth']."</td>
                                                        <td>".$row['cardEXPyear']."</td>
                                                        <td>".$row['card_CVV']."</td>
                                                        <td class='action-btn-group'>
                                                            <button form='delPaymentForm' class='del-btn' name='del-btn' value=".$row['paymentID'].">Delete</button>
                                                        </td>
                                                    </tr>";
                                        }
                                    }
                                }
                            }
                            else {
                                $query  = "SELECT * FROM payment";
                                $result = mysqli_query($link, $query);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                        echo "  <tr id=".$row['paymentID'].">
                                                    <td>".$row['paymentID']."</td>
                                                    <td>".$row['bookingID']."</td>
                                                    <td>".$row['paymentDateTime']."</td>
                                                    <td>".$row['paymentMethod']."</td>
                                                    <td>".$row['billing_fName']."</td>
                                                    <td>".$row['billing_lName']."</td>
                                                    <td>".$row['billing_email']."</td>
                                                    <td>".$row['billing_addr']."</td>
                                                    <td>".$row['billing_city']."</td>
                                                    <td>".$row['billing_state']."</td>
                                                    <td>".$row['nameOnCard']."</td>
                                                    <td>".$row['cardNum']."</td>
                                                    <td>".$row['cardEXPmonth']."</td>
                                                    <td>".$row['cardEXPyear']."</td>
                                                    <td>".$row['card_CVV']."</td>
                                                    <td class='action-btn-group'>
                                                        <button form='delPaymentForm' class='del-btn' name='del-btn' value=".$row['paymentID'].">Delete</button>
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
<?php
    mysqli_close($link);
?>