<!DOCTYPE html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Homepage design with Bootstrap and Animate css</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="new1.css">    

</head>
<body>

    <header>
        <div class="wrapper">
        <html lang="en">
     <nav>
        <ul>
        <img src="1.png" height="71px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a href="slid.html">Recent Projects</a></li>
          <li><a href="new changes/productsbb.php">Products</a></li>
          <li><a href="client_registration.html">Registration</a></li>
          <!-- <li><a href="login.html">Log-in</a></li> -->
          <li><a href="contact.html">Contact</a></li>
                         <?php
                         session_start();
                          if (isset($_SESSION['USER_LOGIN'])) {
                              echo  $_SESSION['Username'].'<a href="Logout.php">Logout</a> <a href="login.html">Order</a>';
                        } else {
                              echo '<a href="login.html"><i class="icon-user icons">Login</i></a>';         
                    }
                    ?>
        </ul>
    
        </div>
      </nav>
      
      <style>
        nav {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          background-color: white;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
          z-index: 999;
        }

        .logo {
            left: 20px;
        }
      
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 90px;
        }
      
        li {
          margin: 0 20px;
        }
      
        a {
          text-decoration: none;
          color: black;
          font-weight: bold;
        }
      </style> 
      

            <!-- <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
                <div class="container">
                     Brand and toggle get grouped for better mobile display -->


                <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">SMART AUTOMATION</a>
                </div>  -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="login.html">Log-in</a></li>
                        <li><a href="#">Recent Projects</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li>
                    </ul> -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>  

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image:url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">We Provide <span>Office</span></h2>
                        <h2 class="animated bounceInLeft" style="animation-delay: 2s">Automation</h2>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image: url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">We provide <span>Security</span></h2>
                        <h2 class="animated fadeInUp" style="animation-delay: 2s">And Services</h2>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner" style="background-image:url();"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">We Provide <span>SmartHome</span></h2>
                        <h2 class="animated fadeInLeft" style="animation-delay: 2s"> Automation</h2>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                    </div>
                </div>


            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    require('blog.php');
    ?>
    <?php
    require('bs.html');
    ?>

</body>
</html>
<?php
    require('foot.html');
?>