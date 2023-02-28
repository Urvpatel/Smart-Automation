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
                        <h1 class="box-title">  Client Acknowledgement  </h1>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th> T_id  </th>
                                        <th> Service_Id  </th>
                                        <th> Service_date </th>
                                        <th> Feedback </th>
                                        <th> Cost </th>
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <body>
<?php 
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'demo');
     $sql=mysqli_query($con," SELECT * from clnt ");
     
 ?>
                    <?php while($row=mysqli_fetch_array($sql)) { ?>
                                
                                
                                            <td><?php echo $row['T_id'];?></td>
                                            <td><?php echo $row['Service_Id'];?></td>
                                            <td><?php echo $row['Service_date'];?></td>
                                            <td><?php echo $row['Feedback'];?></td>
                                            <td><?php echo $row['Cost'];?></td>
                                            
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