<?php
	include("connection.php");

		if(isset($_POST['submit'])){

            $memID = $cid = $bookDate = $bookTime = $bookStatus = "";
           
            $sql = "SELECT * FROM car WHERE carID = '".$_POST['carType']."' ";
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
                $_SESSION['carID'] = $row['carID'];
                $cid = $_SESSION['carID'];
            }
            

           
            $sql = "SELECT * FROM member WHERE memberID = '".$_SESSION['userID']."' ";
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
                $_SESSION['userID'] = $row['memberID'];
                $memID = $_SESSION['userID'];
            }

           
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $bookDate = date('Y-m-d H:i:s');
            $bookTime = date('Y-m-d H:i:s');

            $bookStatus = "pending" ; 

             
            $sql = "SELECT * FROM booking WHERE memberID = $memID";
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
                $_SESSION['bookingID'] = $row['bookingID'];
            }



            $sql = "INSERT INTO booking(memberID, carID, bookingDate, bookingTime, bookingStatus)
            VALUES ('$memID','$cid','$bookDate','$bookTime', '$bookStatus')";


           
           
        } 

        if(mysqli_query($link, $sql)){
            echo "<script>alert('Processing your booking..Proceed to checkout..');
            window.location='checkout.php';</script>";
        }
        
        else{
            echo "<script>alert('The booking process is unsuccessful..');
            window.history.back()</script>";
        }

        
?>