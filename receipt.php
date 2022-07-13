<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "connection.php";
require "vendor/autoload.php";

$mail = new PHPMailer(true);


$sql = "SELECT * FROM booking";
$query = $link -> query($sql);
$row = $query -> fetch_assoc();
$num = $query -> num_rows;	
        
if($num==1){
    $_SESSION['bookingID'] = $row['bookingID'];
    //$set = $_SESSION['bookingID'];
}

$set = $_SESSION['bookingID'];
if($set){

	$sql = "SELECT car.carName, car.carBody, car.carGearBox, car.carMonthlyRate, payment.billing_email
		FROM car INNER JOIN booking
		ON car.carID = booking.carID
		INNER JOIN payment
		WHERE booking.bookingID = '$set'";


	$show = mysqli_query($link,$sql);
	while($rows= mysqli_fetch_array($show)){
		$carN = $rows['carName'];
		$carB = $rows['carBody'];
		$carG = $rows['carGearBox'];
		$totalPaid = $rows['carMonthlyRate'];
	}	
}

$symbol = chr(163);
$message = '<html><head><meta http-equiv="Content-Type” content="text/html; charset=utf-8”></head><body>';
$message .= '<h1>Receipt from LINGsCARs Company</h1><br>';
$message .= '<h3>Billing Address</h3>';
$message .= '<p>'.$_SESSION['firstname']." ".$_SESSION['lastname'].'<br>'.$_SESSION['address']."<br>".$_SESSION['city'] ." ".$_SESSION['state'].'<br><br>'.$_SESSION['email'].'<br></p><hr>';
$message .= '<h3>Shipping Address</h3>';
$message .= '<p>'.$_SESSION['firstname2']." ".$_SESSION['lastname2'].'<br>'.$_SESSION['address2']."<br>".$_SESSION['city2'] ." ".$_SESSION['state2'].'<br><br>'.$_SESSION['email2'].'<br></p><hr>';
$message .= '<h3>Date of Purchase</h3>';
$message .= '<p>'.$_SESSION['datetime'].'</p><hr>';
$message .= '<h3>Purchase Details</h3>';
$message .= '<p>'.$carN.'<br>'.$carB.' '.$carG.'<br></p><hr>';
$message .= '<h2 style="color:#080;">Total Paid : '.$symbol.$totalPaid.'</h2><hr><br><br><br>';
$message .= '<p>LINGsCARs Company<br>15 Riverside Studios Newcastle Business Park Newcastle upon Tyne, 
NE4 7YL<br> Company Reg No: 6178634 || VAT No: 866 0241 30</p>';
$message .= '</body></html>';

try {

	$mail->IsSMTP();                            // telling the class to use SMTP
	$mail->SMTPAuth   = true;                   // SMTP authentication
	$mail->SMTPSecure = 'tls';
	$mail->Host       = "smtp.gmail.com";       // SMTP server
	$mail->Port       = 587;                    // SMTP Port
	$mail->Username    = "lingscars.itik@gmail.com";   // SMTP account username
	$mail->Password   = "xpfrjamtxpgoayon";        // SMTP account password
	    
	$mail->setFrom("lingscars.itik@gmail.com", "LINGsCARs");
	$mail->addAddress($_SESSION ['email']);
	$mail->isHTML(true);								
	$mail->Subject = "Your LINGsCARs E-Receipt";
	$mail->Body = $message;
	$mail->send();

	echo '<script type="text/javascript">
       window.onload = function () { alert("Mail has been sent successfully!"); } </script>'; 

} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<html>
	<head>
		<title>Receipt</title>
	<style type="text/css">
		body {		
			font-family: Verdana;
			font-size: 20px;
		}
		
		div.receipt {
		border:1px solid #ccc;
		padding:10px;
		height:100%;
		width:570pt;
		margin: 5%;
		}

		div.Address{
			/*border:1px solid #ccc; */
			float:left;
			width:250pt;
			text-align:left;
		}
		
		div.Rdetails {
			float:right;
			width:250pt;
			text-align:left;
		}
		
		div.cdetails {
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
			text-align:left;
		}
		
		div.Pdetails{
			clear:both;
			float:left;
			text-align:left;
		}
		</style>

	</head>
	<body><center>
		<div class="receipt">
			<div class="Address">
				<img src = "img\logo.png" width="30%">
				<br><br>LINGsCARs Company<br>
				15 Riverside Studios Newcastle Business Park Newcastle upon Tyne, NE4 7YL<br> 
				<br>Company Reg No: 6178634 <br> VAT No: 866 0241 30<br>
				<br><br><b>Billing Address</b><br>
				<?php
					echo $_SESSION['firstname']." ". $_SESSION['lastname']."<br>";
					echo $_SESSION['address']."<br>".$_SESSION['city']." ".$_SESSION['state']."<br>";
				?>
				<br><br><b>Shipping Address</b><br>
				<?php
					echo $_SESSION['firstname2']." ". $_SESSION['lastname2']."<br>";
					echo $_SESSION['address2']."<br>".$_SESSION['city2']." ".$_SESSION['state2']."<br>";
				?>
			</div>	

			<div class="Rdetails">
				Date: <?php echo $_SESSION['datetime'];?> 
			</div>

			<div class="Pdetails">
				<br><br><b>Product Details</b>
				<br>Car Name: <?php echo $carN; ?>
				<br>Car Body: <?php echo $carB;?>
				<br>Car Gear Box: <?php echo $carG;?>
				<br><br><br><b>Total Paid:<b> <?php echo " £".$totalPaid;?>	
				<br><br><br><a href = "javascript:window.print()"><button>Print Receipt</button></a>		
			</div>
		</div>	
	</center>		
	</body>
</html>
