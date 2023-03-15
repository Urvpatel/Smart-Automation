<?php

$conn = mysqli_connect('localhost','root','','cart_db');
?>
<header class="header">

   <div class="flex">

      <a href="#" class="logo" 
      style="position: relative;
                          right: -400px;
                          text-decoration:none;
                           top: -5px;"></a>
                           
      <nav class="navbar">
        
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>


      
      <a href="cart.php" class="cart"
                   style="position: relative;
                           right: -141px;
                           
                          bottom: 7px;">View cart <span><?php echo $row_count; ?></span> </a>
<div id="menu-btn" style="position: relative;
                           right: -141px;
                           
                          bottom: 7px;"class="fas fa-bars"></div>
   </div>

</header>