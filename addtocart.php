<?php

    if (isset($_POST['action']) && $_POST['action']=="addCar"){
        if (isset($_POST['code']) && $_POST['code']!=""){
            $code = $_POST['code'];

            $result = mysqli_query($link,"SELECT * FROM car WHERE carID = $code");

            $row = mysqli_fetch_assoc($result);
            $code = $row['carID'];
            $cname = $row['carName'];
            $cbody = $row['carBody'];
            $ctrim = $row['carTrim'];
            $cfuel = $row['carFuel'];
            $cBHP = $row['carBHP'];
            $cGearB = $row['carGearBox'];
            $cPaint = $row['carPaint'];
            $cTerm = $row['carTerm'];
            $cMR = $row['carMonthlyRate'];


            $cartArray = array(
                $code=>array(
                'code' => $code,
                'cname' => $cname,
                'cbody' =>  $cbody,
                'ctrim' => $ctrim,
                'cfuel' => $cfuel,
                'cBHP' => $cBHP,
                'cGearB' => $cGearB,
                'cPaint' => $cPaint,
                'cTerm' => $cTerm,
                'cMR' => $cMR,
                'quantity'=>1)
            );

            if(empty($_SESSION['car_cart'])) {
                $_SESSION['car_cart'] = $cartArray;
                echo '<script type="text/javascript"> alert("The car is successfully added to your cart!")</script>';
            }
            
            else{
                $array_keys = array_keys($_SESSION['car_cart']);
                if(in_array($code, $array_keys)) {
                    echo '<script type="text/javascript"> alert("Cannot add the car because the car has already been added to your cart!")</script>';
                } 
                
                else {
                    $_SESSION['car_cart'] = array_merge($_SESSION['car_cart'],$cartArray);
                    echo '<script type="text/javascript"> alert("The car is added to your cart!")</script>';
                    
                }

            }
        }//end if
    }//end if

           
    else if (isset($_POST['action']) && $_POST['action']=="removeCar"){
        if(!empty($_SESSION['car_cart'])) {

            foreach($_SESSION['car_cart'] as $key => $value) {

                if($_POST['code'] == $key){
                    unset($_SESSION['car_cart'][$key]);
                    echo '<script type="text/javascript"> alert("The car is removed from your cart!")</script>';
                    
                }

                if(empty($_SESSION["car_cart"])){
                    unset($_SESSION["car_cart"]);
                }
            }		
        }
    }


?>


<html>
    <body id="body">

        <?php
        $sql = "SELECT * FROM car";
        $result = mysqli_query($link, $sql);

        while($row = mysqli_fetch_assoc($result)){
            echo "<div class='product_wrapper'>
                <form method='post' action='indexMember.php#cart'>
                    <input type='hidden' name='code' value=".$row['carID']." />
                    <div class='cname'> ".$row['carName']."</div>
                    <div class='cfuel'> ".$row['carFuel']."</div>
                    <div class='cGearB'> ".$row['carGearBox']."</div>
                    <div class='cPaint'> ".$row['carPaint']."</div>
                    <div class='cTerm'> ".$row['carTerm']."</div>
                    <div class='cMR'> ".$row['carMonthlyRate']."</div>
                    <input type='hidden' name='action' value='addCar'/>
                    <button type='submit' class='buy' >Add to cart</button>
                </form>
            </div>";

        }
        mysqli_close($link);
        ?>

        <div style="clear:both;"></div>
        <br><br><br><br>
        <div class="cart">
            <?php
                if(isset($_SESSION['car_cart'])){
                    $total_price = 0;
            ?>	
            <table class="table">
            <tbody>
                <tr>
                    <td>Car name</td>
                    <td>Quantity</td>
                    <td>Unit price</td>
                    <td>Total price</td>
                    <td>
                        <?php
                            if(!empty($_SESSION['car_cart'])) {
                            $cart_count = count(array_keys($_SESSION['car_cart']));
                            ?>
                            <div class="cart_div">
                            <a><img src="img/cart-icon.png" style="width:40px;height:40px;"/> Cart<span>
                            <?php echo $cart_count; ?></span></a>
                            </div>
                            <?php
                            }
                        ?>
                    </td>
                </tr>	
            <?php		

            foreach ($_SESSION["car_cart"] as $product){
            ?>
            <tr>
                <td><?php echo $product['cname']; ?><br>
                    <form method='post' action='indexMember.php#cart'>
                        <input type='hidden' name='code' value="<?php echo $product['code']; ?>"/>
                        <input type='hidden' name='action' value="removeCar"/>
                        <button type='submit' class="remove">Remove car</button>
                    </form>
                </td>
                
                <td>
                    <?php $product['quantity']=1;?>
                    <input type='hidden' name='code' value="<?php echo $product['code']; ?>"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $product['quantity']; ?>
                    
                </td>

                <td><?php echo "£".$product['cMR']; ?></td>

                <td><?php echo "£".$product['cMR']*$product['quantity']; ?></td>
            </tr>
                <?php
                $total_price += ($product['cMR']*$product['quantity']);
                }
            ?>
            <tr>
                <td colspan="4" align="right">
                <strong>TOTAL: <?php echo "£".$total_price; ?></strong>
                </td>
            </tr>
            </tbody>
            </table>

            <?php
            }else{
                echo "<h3>Your car cart is empty!</h3>";
                }
            ?>

        </div>

        <div style="clear:both;"></div>

    </body>
</html>

