<?php include("connection.php"); ?>

<html>
    <head>
        <title>Car List</title>
        <link rel="stylesheet" href="car-list.css">
        <link rel="stylesheet" href="main.css">
        <script src="car-list.js"></script>
        <script src="main.js"></script>
    </head>
    <body id="body">

        <!--nav bar-->
        <?php include("navBarIndex.php"); ?>
       
        <!-- ------------------------------------------------------------------------------------------------------------- -->
        <div class="content">
            <h1>Cars</h1>
<!-- 
            <div id="filter">
                <form action="" id="filter-form">
                   <div class="dropdown">
                        <button id="brand-button" type="button">Brand</button>
                        <div class="dropdown-menu" id="brand-dropdown">
                        <p>test</p> 
                        </div>
                    </div>
                   <div class="dropdown">
                        <button id="trans-button" type="button">Transmission</button>
                        <div class="dropdown-menu" id="trans-dropdown">

                        </div>
                    </div>
                    <div>
                        <button type="submit" id="filter-button">Filter</button>
                    </div>
                </form>
            </div> -->
            <div id="car-grid">
                <script>
                    generate();
                </script>
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
