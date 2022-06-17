<?php
	include("connection.php");
		if(isset($_POST['username'])){
            $sql = "SELECT * FROM admin WHERE adminUsername = '".$_POST['username']."' AND adminPassword = '".$_POST['password']."'";
            $query = $link -> query($sql);
            $row = $query -> fetch_assoc();
            $num = $query -> num_rows;	
                    
            if($num==1){
                $_SESSION['username'] = $row['adminUsername'];
                $_SESSION['accountLevel'] = "admin";

                if(isset($_SESSION['username'])){
                    //echo "Sucessfully logged in as admin..Welcome". $_SESSION['username'];
                    
                    echo "<script>alert('Sucessfully logged in as admin. Welcome!!'); window.location='indexAdmin.php';</script>";
                    
                    
                    
                }
                
                
            } 

            
                $sql = "SELECT * FROM member WHERE memberUsername = '".$_POST['username']."' AND memberPassword = '".$_POST['password']."'";
                $query = $link -> query($sql);
                $row = $query -> fetch_assoc();
                $num = $query -> num_rows;	
                        
                if($num==1){
                    $_SESSION['username'] = $row['memberUsername'];
                    $_SESSION['accountLevel'] = "member";

                    if(isset($_SESSION['username'])){
                        //echo "Sucessfully logged in as member..Welcome". $_SESSION['username'];
                        echo "<script>alert('Sucessfully logged in member. Welcome!!'); window.location='indexMember.php';</script>";
                        
                    }
                            
                } 
            
            
            else{
                echo "<script>alert('The username and password are invalid..');
                window.location='index.php';
                </script>";
            }
		}
?>