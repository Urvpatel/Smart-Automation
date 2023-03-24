<?php
require("panel_new.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dash.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">   
                       <a href="clnta.php"> <h3>Total Client</h3>
                        <?php
                        $conn = mysqli_connect('localhost','root','','demo');
                        $dash_cat_queery="SELECT * from clnt_reg";
                        $dash_cat_queery_done=mysqli_query($conn,$dash_cat_queery);
                        if($cat=mysqli_num_rows( $dash_cat_queery_done))
                        {
                            echo'<h5 class="mb-0">'. $cat.'</h5>';
                        }
                        else
                        {
                            echo'<h5 class="mb-0">No Client Register</h5>';
                        }

                        ?>
                       </a>
                    </div>
                    <!-- <div class="icon-case">
                        <img src="students.png" alt="">
                    </div> -->
                </div>
                <div class="card">
                    <div class="box">
                    <a href="tech_a.php">  <h3>Technician</h3>
                        <?php
                        $con = mysqli_connect('localhost','root','','demo');
                        $dash_cat_queery="SELECT * from technician";
                        $dash_cat_queery_done=mysqli_query($con,$dash_cat_queery);
                        if($cat=mysqli_num_rows( $dash_cat_queery_done))
                        {
                            echo'<h5 class="mb-0">'. $cat.'</h5>';
                        }
                        else
                        {
                            echo'<h5 class="mb-0">No Technician Register</h5>';
                        }

                        ?>
                    </a>
                    </div>
                    <!-- <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div> -->
                </div>
                <div class="card">
                    <div class="box">
                    <a href="servicebooka.php"><h3>Services</h3>
                        
                        <?php
                        $connn = mysqli_connect('localhost','root','','demo');
                        $dash_cat_queery="SELECT * from service_book";
                        $dash_cat_queery_done=mysqli_query($connn,$dash_cat_queery);
                        if($cat=mysqli_num_rows( $dash_cat_queery_done))
                        {
                            echo'<h5 class="mb-0">'. $cat.'</h5>';
                        }
                        else
                        {
                            echo'<h5 class="mb-0">No Service Register</h5>';
                        }

                        ?>
                    </a>
                    </div>
                    <!-- <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div> -->
                </div>
                <div class="card">
                    <div class="box">
                    <a href="#"><h3>Total Products</h3>

                        <?php
                        $connn = mysqli_connect('localhost','root','','demo');
                        $dash_cat_queery="SELECT * from service_book";
                        $dash_cat_queery_done=mysqli_query($connn,$dash_cat_queery);
                        if($cat=mysqli_num_rows( $dash_cat_queery_done))
                        {
                            echo'<h5 class="mb-0">'. $cat.'</h5>';
                        }
                        else
                        {
                            echo'<h5 class="mb-0">No Products Register</h5>';
                        }

                        ?>
                    </a>
                    </div>
                    <!-- <div class="icon-case">
                        <img src="income.png" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>