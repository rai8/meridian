<?php
 $pay_id = $_GET['id'];
 include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bliss - Demo</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./assets/img/favicon m.png" rel="icon" sizes="16x16" type="image/png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v2.0.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="/">Meridian Hospital</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <!-- <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>

        </ul> -->
      </nav><!-- .nav-menu -->
      
      <?php
        
        $sql = mysqli_query($conn, "SELECT * FROM details WHERE id = '$pay_id'");
        $row = mysqli_fetch_array($sql);
        $email = $row['email'];
      
      ?>
      

      <a href="#" class="scrollto"><b><?php echo $email; ?></b></a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center" style="margin-top: -8%;">
          <h1>Meridian Consultation Platform </h1>
        </div>
      </div>

      <div class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 pt-2 pt-lg-0 text-center">
              <p>
                  Every person should have a primary care provider, someone who knows not only your medical history, but your personality, believes and preferences, as well as your entire family. At  Merdian Hospital, we know that there are many factors that influence someone’s health.
              </p>
              <a href="#" class="btn-learn-more">Talk to us</a>
            </div>
            <div class="col-lg-1"></div>
          </div>
  
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>2020</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  
  <call-us 
    style="position: fixed; bottom: 8px; right: 8px; z-index: 99999;--call-us-form-header-background:#007bc7;--call-us-header-text-color:#ffffff;--call-us-form-height:470;--call-us-form-width:250;"
    phonesystem-url="https://anganisupport.elastix.com:5001/"
    party="josephmatheka"
    allow-call="true"
    allow-video="true"
    authentication="name"
    invite-message= "Hello! How can I help you?"
    operator-name="Support"
    allow-soundnotifications="true"
    enable-poweredby="false"
    ignore-queueownership="false"
    enable-onmobile="true"
    popout="true"
    window-title="Contact Us"
    animation-style="fadeIn"
    minimized="true"
    minimized-style="bubble">
</call-us>
<script src="https://anganisupport.elastix.com:5001/callus.js" charset="utf-8"></script>
  

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>