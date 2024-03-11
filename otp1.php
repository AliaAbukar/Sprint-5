<?php
require_once 'php/connection.php';
session_start();

if ((!isset($_SESSION['type1']) && !isset($_SESSION['uid1']))) {
    header("Location: login.html");
}else{

}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dasani Order Management System - OTP Page</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/dlogo.png" style="width: 200px;" alt="" />
            <span>
               
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">Testimonial </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="experience.html"> Services </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login.html">
                <span>
                  Login
                </span>
              </a>
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Stay Hydrated<br>
                       with<br>
                       Dasani 
                    </h1>
                    <p>
                      Order Pure, Refreshing Water Online Today!
                    </p>
                    <div class="btn-box">
                      <a href="about.html" class="btn-1">
                        About Us
                      </a>
                      <a href="login.html" class="btn-2">
                        Login
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/smiling.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Hydration<br>
                       Made<br>
                       Easy
                    </h1>
                    <p>
                      Customize Your Delivery Schedule with Dasani!
                    </p>
                    <div class="btn-box">
                      <a href="testimonial.html" class="btn-1">
                        What Others Say About Us
                      </a>
                      <a href="register.html" class="btn-2">
                        Register
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/wink.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                       Trust <br>
                       Dasani<br>
                       Water
                    </h1>
                    <p>
                       For Premium Quality Water, Delivered Straight to Your Doorstep!
                    </p>
                    <div class="btn-box">
                      <a href="experience.html" class="btn-1">
                        Our Services
                      </a>
                      <a href="login.html" class="btn-2">
                        Login
                      </a>
                    </div>
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/happy.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>

<!-- get started section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <span>
              Get Started
            </span>
          </div>
        </div>

        <div class="info_main">
          <div class="row">

            <div class="col-md-12">
              <div class="info_form ">
                <h5>
                  Verify One-Time-Password (OTP)
                </h5>
                <form action="php/authentication.php" method="POST">
                  <?php
                  if (isset($_SESSION['type']) && isset($_SESSION['uid'])) {
                    $uidd = $_SESSION['uid'];
                    $utype = $_SESSION['type'];
                  echo "<input type='hidden' required value='1' name='mod'>";
                  echo "<input type='hidden' required value='" . $uidd . "' name='uid'>";
                  echo "<input type='hidden' required value='". $utype ."' name='type'>";                  
                  }else if (isset($_SESSION['type1']) && isset($_SESSION['uid1'])){
                    $uidd = $_SESSION['uid1'];
                    $utype = $_SESSION['type1'];
                    echo "<input type='hidden' required value='3' name='mod'>";
                    echo "<input type='hidden' required value='" . $uidd . "' name='uid1'>";
                    echo "<input type='hidden' required value='". $utype ."' name='type1'>";                    
                  }
                  ?>
                  <input type="password" name="itp" required placeholder="Password">
                  <button name="login" type="submit">
                    Login
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end get started section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/dlogo.png" alt="" />
          </div>
        </div>

        <div class="info_main">
          <div class="row">
            <div class="col-md-6">
              <div class="info_link-box">
                <h5>
                  Useful Links
                </h5>
                <ul>
                  <li class=" active">
                    <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="">
                    <a class="" href="about.html">About </a>
                  </li>
                  <li class="">
                    <a class="" href="testimonial.html">Testimonial </a>
                  </li>
                  <li class="">
                    <a class="" href="why.html">Why Choose Us </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-6">
              <h5>
                Who We Are
              </h5>
              <p>
                Dasani is committed to delivering pure, great-tasting water straight to your doorstep, ensuring hydration is never out of reach. With our easy-to-use online platform, staying hydrated has never been simpler.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Nairobi, Kenya.
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        info@dasani.org
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +254 7123456789
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

</html>