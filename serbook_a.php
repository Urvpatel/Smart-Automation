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
                        <h1 class="box-title">  Service Details  </h1>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th> User Name  </th>
                                        <th> Confirm Address </th>
                                        <th> Product issue </th>
                                        <th> Booking Date  </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <body>
<?php 
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'demo');
     $sql=mysqli_query($con," SELECT * from service_book ");
     
 ?>
                    <?php while($row=mysqli_fetch_array($sql)) { ?>
                                
                                
                                            <td><?php echo $row['U_name'];?> &nbsp; </td>
                                            <td><?php echo $row['Confirm_Address'];?> &nbsp;</td>
                                            <td><?php echo $row['Issue_text'];?> &nbsp; </td>
                                            <td><?php echo $row['dt_book'];?> &nbsp; </td>
                                            
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