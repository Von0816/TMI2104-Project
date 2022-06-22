<?php
	include("connection.php");

    if(isset($_SESSION['username'])){
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

            


            $sql = "INSERT INTO booking(memberID, carID, bookingDate, bookingTime, bookingStatus)
            VALUES ('$memID','$cid','$bookDate','$bookTime', '$bookStatus')";


           
           
        } 

        if(mysqli_query($link, $sql)){
            echo '<script type="text/javascript">alert("Processing your booking..Proceed to checkout..");
            window.location="checkout.php";</script>';
        }
        
        else{
            echo "<script>alert('The booking process is unsuccessful..');
            window.history.back()</script>";
        }
    }//end if

    
    else{
        echo '<script type="text/javascript">alert("You need to log in or register first before making your payment..");
            window.location="index.php";</script>';
    }//end else

		
   
?>