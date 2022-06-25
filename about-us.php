<?php include("connection.php"); ?>

<html>
    <head>
        <title>About Us</title>
        <link rel="stylesheet" href="css/about-us.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="icon" type="image/x-icon" href="img/logo2.png">
        <script src="about-us.js"></script>
		<script src="index.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
			.top-image {
				background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.8)), url("img/lingscars team.jpg");
				height: 70%;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			}
		</style>
    </head>

    <body id="body">
		<!--nav bar-->
        <?php include("navbar.php"); ?>
        
		<!--content-->
		<div class="top-image">
			<div class="top-text">
				<h1 class="text1" >ABOUT US</h1>
			</div>
		</div>
		
		
		<div class="about_us_top">
			<h1>MEET THE LINGsCARS TEAM</h1>
		</div>
		
		
		<div class="container">
		
			<h2>WHAT WE OFFER?</h2>
			<p id="para1">LINGsCARS provides car leasing to working adults who live in the United Kingdom. We offer a wide variety 
			of cars as we deal with a list of car dealers and financial companies. Car leasing is offered for both 
			personal and business purposes. Eligible individuals can choose an available car and lease it for 
			their own chosen contract duration without much hassle. Customers may get their road-tax paid 
			for free based on their leasing contract duration.</p><br><br>
			
			<i class="fa fa-phone" style="font-size:36px;color:#4B63DD;"></i>&ensp; CONTACT US : 0191 460 9444
			<br><br>
			<i class="fa fa-globe" style="font-size:36px;color:#4B63DD;"></i>&ensp; OUR WEBSITE: LINGSCARS.COM
			<br><br>
			<i class="fa fa-map-marker" style="font-size:36px;color:#4B63DD;"></i>&ensp; OUR ADDRESS: 15 RIVERSIDE STUDIOS, NEWCASTLE BUSINESS PARK, NEWCASTLE UPON TYNE, NE4 7YL
			
			<br><br><hr><br><br>
		
			<div class="row">
				<div class="column">
					<img src="img/lingscars boss.jpg" onclick="openImage();currentSlide(1)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_1.jpg" onclick="openImage();currentSlide(2)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_2.jpg" onclick="openImage();currentSlide(3)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_3.jpg" onclick="openImage();currentSlide(4)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_4.jpg" onclick="openImage();currentSlide(5)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_5.jpg" onclick="openImage();currentSlide(6)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_6.jpg" onclick="openImage();currentSlide(7)" class="hover-shadow cursor other_image">
				</div>
				
				<div class="column">
					<img src="img/staff_7.jpg" onclick="openImage();currentSlide(8)" class="hover-shadow cursor other_image">
				</div>
				
			</div>
			
			<div id="staff_info" class="staff_bg">
				<span class="close_btn cursor" onclick="closeImage()">&times;</span>
				
				<div class="staff_content">
				
					<div class="staff_images_slides">
						<div class="number_in_slides">1 of 8 images</div>
						<img class="image_slides" src="img/lingscars boss.jpg">
					</div>
					
					<div class="staff_images_slides">
						<div class="number_in_slides">2 of 8 images</div>
						<img class="image_slides" src="img/staff_1.jpg">
					</div>
					
					<div class="staff_images_slides">
						<div class="number_in_slides">3 of 8 images</div>
						<img class="image_slides" src="img/staff_2.jpg">
					</div>
					
					<div class="staff_images_slides">
						<div class="number_in_slides">4 of 8 images</div>
						<img class="image_slides" src="img/staff_3.jpg">
					</div>
					
					<div class="staff_images_slides">
						<div class="number_in_slides">5 of 8 images</div>
						<img class="image_slides" src="img/staff_4.jpg">
					</div>
					
					<div class="staff_images_slides">
						<div class="number_in_slides">6 of 8 images</div>
						<img class="image_slides" src="img/staff_5.jpg">
					</div>
			
					<div class="staff_images_slides">
						<div class="number_in_slides">7 of 8 images</div>
						<img class="image_slides" src="img/staff_6.jpg">
					</div>
			
					<div class="staff_images_slides">
						<div class="number_in_slides">8 of 8 images</div>
						<img class="image_slides" src="img/staff_7.jpg">
					</div>
			
					<a class="prev_btn" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next_btn" onclick="plusSlides(1)">&#10095;</a>

					<div class="name_of_staff_box">
						<p id="staff_name"></p>
					</div>


					<div class="column">
						<img class="image cursor" src="img/lingscars boss.jpg" onclick="currentSlide(1)" alt="Ling Valentine - The CEO">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_1.jpg" onclick="currentSlide(2)" alt="Lily Shears">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_2.jpg" onclick="currentSlide(3)" alt="Holly Sinton">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_3.jpg" onclick="currentSlide(4)" alt="Guy McAulay">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_4.jpg" onclick="currentSlide(5)" alt="Gavin Roberts">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_5.jpg" onclick="currentSlide(6)" alt="Randall Bell">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_6.jpg" onclick="currentSlide(7)" alt="David Robson">
					</div>
					
					<div class="column">
						<img class="image cursor" src="img/staff_7.jpg" onclick="currentSlide(8)" alt="Adrian Huggins">
					</div>
					
				
				</div>
			</div>
		</div>
		
		 <!--FOOTER-->
        <section class="footer">
            <footer class="f">
                <a href="index.php"><img src="img/lingscars-logo.png"></a>           
                <p> Company Reg No: 6178634 || VAT No: 866 0241 30 <br>
                    © Copyright 2004 - 2022 LINGsCARS.com. All rights reserved.</p>
            </footer>
        </section>
		

    </body>
</html>
