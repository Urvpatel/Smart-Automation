<?php require('demo_a.php');
?>

<link rel="stylesheet" href="style_c.css" /><div class="content pb-0">
<script src="https://kit.fontawesome.com/184bf0ce5d.js" crossorigin="anonymous"></script>

            <script src="https://kit.fontawesome.com/184bf0ce5d.js" crossorigin="anonymous"></script>
            <a href="demo_a.html"> <i class="fa-solid fa-house-user"></i></a>

<div class="orders">
        <div class="row">
            <dic class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h1 class="box-title">  Client Details  </h1>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th> F_name  </th> <br>
                                        <th> L_name  </th> <br>
                                        <th> Username </th> 
                                        <th> Address </th> 
                                        <th> Email </th> 
                                        <th> Gender </th> 
                                        <th> Contact No  </th> 
                                        <th></th>
                                    </tr>
                                </thead>
                                <body>
<?php 
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'demo');
     $sql=mysqli_query($con," SELECT * from clnt_reg ");
     
 ?>
                    <?php while($row=mysqli_fetch_array($sql)) { ?>
                                
                                
                                            <td><?php echo $row['F_name'];?></td>
                                            <td><?php echo $row['L_name'];?></td>
                                            <td><?php echo $row['Username'];?></td>
                                            <td><?php echo $row['Address_1'];?></td>
                                            <td><?php echo $row['Email'];?></td>
                                            <td><?php echo $row['Gender'];?></td>
                                            <td><?php echo $row['Phn_no'];?></td>
                                            <td>
                                           </td>
                                        </tr>
                                        <?php } ?>
                                    
                                </body>
                            </table>
                        </div>
                    </div>
                </div>
            </dic>
        </div>
    </div>

</div>