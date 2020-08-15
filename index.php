<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meridian Health | Kenya</title>
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

      <h1 class="logo mr-auto"><a href="/">Meridian Health</a></h1>
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

      <a href="#about" class="get-started-btn scrollto">Book Consultation</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center" style="margin-top: -8%;">
          <h1>Meridian Consultation Platform</h1>
        </div>
      </div>

      <div class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-1"></div>
            <div class="col-lg-10 pt-2 pt-lg-0 text-center">
              <p>
                  Every person should have a primary care provider, someone who knows not only your medical history, but your personality, believes and preferences, as well as your entire family. At Merdian Hospital, we know that there are many factors that influence someone’s health.
              </p>
              <a href="#about" class="btn-learn-more scrollto">Proceed to Consultation</a>
            </div>
            <div class="col-lg-1"></div>
          </div>
  
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Schedule Consultation</h2>
          <p>Hi user, thank you for reaching out to us to schedule a virtual consultation. To proceed please follow the steps below: </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                Request for appointment
            </p>
            <ul>
              <li><i class="ri-arrow-right-line"></i> 
                <h5>Kindly fill in the Form</h5>
                <small>After filling out the form on the right please click on the “<b>CLICK ON SAVE DETAILS</b>” button.  Your details will be saved and thereafter a popup alert will direct you to an online payment page.</small>
              </li>
              <li><i class="ri-arrow-right-line"></i> 
                <!-- <h5>Make Payment</h5>
                <small>On the payment page that follows the above step, kindly insert your PIN within 10-15 seconds after getting the STK push to your phone.</small>
                <ul>
                  <li><i class="ri-check-double-line"></i> <small>Kindly note that the general consultation fee is Kshs 1/-</small></li>
                  <li><i class="ri-check-double-line"></i> <small>This will entitle you to a chat or video call with our doctor who will give you professional medical advice for your condition/queries</small></li>
                </ul>
              </li>
              <li><i class="ri-arrow-right-line"></i>  -->
                <h5>Chat & Talk Page</h5>
                <small>After completing the payment process above, you will be directed to a page where you can start a chat or a video call to our health professionals by clicking the button at BOTTOM RIGHT.</small>
              </li>
              
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
              <div class="contact">
                  <div class="container" data-aos="fade-up">
                      <form action="details.php" method="post" id="details-form">
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" required/>
                          </div>
                          <div class="col-md-6 form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" required/>
                          </div>
                        </div>

                        <div class="form-group">
                          <select type="text" class="form-control custom-select " name="gender" onmousedown="if(this.options.length>2){this.size=2;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                            <option selected disabled hidden >Select gender</option>
                            <option>Female</option>
                            <option>Male</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <input type="date" class="form-control" name="patient_dob" placeholder="Date of Birth" required/>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" name="phone" placeholder="Mobile number" required/>
                        </div>

                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" id="patient_email" required/>
                        </div>

                        <div class="form-group">
                          <input type="text" class="form-control" name="home_address" placeholder="Home address" required/>
                        </div>
                        <div class="form-group">
                          <select type="text" class="form-control custom-select selectpicker" name="consultation_category" onmousedown="if(this.options.length>2){this.size=2;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                            <option selected disabled hidden>Select consultation category</option>
                            <option>General consultation</option>
                            <option>Special consultation</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <select type="text" class="form-control custom-select" name="branch" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;" required>
                            <option selected disabled hidden>Select nearest branch</option>
                            <option>Awendo</option>
                            <option>Bondo</option>
                            <option>Busia</option>
                            <option>Buruburu</option>
                            <option>College House</option>
                            <option>Daystar Athi River</option>
                            <option>Daystar Valley Road</option>
                            <option>Diani</option>
                            <option>Eldama Ravine</option>
                            <option>Eldoret Pioneer</option>
                            <option>Eldoret A</option>
                            <option>Eldoret Zion Mall</option>
                            <option>Emali</option>
                            <option>Embakasi</option>
                            <option>Embu</option>
                            <option>Enterprise road</option>
                            <option>Garissa</option>
                            <option>Githurai</option>
                            <option>Haile Sellasie</option>
                            <option>Homabay</option>
                            <option>Iten</option>
                            <option>Jogoo Road</option>
                            <option>Kabarnet</option>
                            <option>Kajiado</option>
                            <option>Kakamega</option>
                            <option>Kakuma</option>
                            <option>Kapenguria</option>
                            <option>Kapsabet</option>
                            <option>Kericho</option>
                            <option>Kerugoya</option>
                            <option>Kiambu</option>
                            <option>Kibera</option>
                            <option>Kimilili</option>
                            <option>Kisii</option>
                            <option>Kisii 2</option>
                            <option>Kisumu Al Imran</option>
                            <option>Kisumu Mega Mall</option>
                            <option>Kitale</option>
                            <option>Kitui</option>
                            <option>Machakos</option>
                            <option>Maralal</option>
                            <option>Marsabit</option>
                            <option>Malaba</option>
                            <option>Malindi</option>
                            <option>Maua</option>
                            <option>Mbale</option>
                            <option>Meru</option>
                            <option>MFI Embakasi</option>
                            <option>Migori</option>
                            <option>Mombasa</option>
                            <option>Moi Avenue</option>
                            <option>Mtwapa</option>
                            <option>Murang’a</option>
                            <option>Nairobi West</option>
                            <option>Naivasha</option>
                            <option>Nakuru</option>
                            <option>Nanyuki</option>
                            <option>Nkubu</option>
                            <option>Nyamira</option>
                            <option>Nyeri</option>
                            <option>Nyeri Sunguest</option>
                            <option>Ol' Kalou</option>
                            <option>Panari Embakasi</option>
                            <option>Panari Nyahururu</option>
                            <option>Pangani</option>
                            <option>Pipeline</option>
                            <option>South C</option>
                            <option>Siaya</option>
                            <option>Teleposta</option>
                            <option>Thika</option>
                            <option>Umoja</option>
                            <option>Webuye</option>
                            <option>Westlands</option>
                            <option>Wote</option>
                          </select>
                        </div>
                        <h6>Other Information</h6>
                        <div class="form-group">
                          <textarea class="form-control" name="brief_message" rows="5"  placeholder="Short description of your consultation" required></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="submit" class="btn btn-primary btn-block save-btn">Save Details</button>
                        </div>
                        <br>
                        <div class="form-group">
                          <div id="messages">
                          </div>
                        </div>
                      </form>
                  </div>
                </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->
  
  <?php
    include('connect.php');
    
  ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>2020</span></strong>. All Rights Reserved by Meridian Health Group.
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

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
  
  <script type="text/javascript">

		$(document).ready(function() {
			$("#details-form").unbind('submit').bind('submit', function() {

				var form = $(this);
				var formData = new FormData($(this)[0]);

				$.ajax({
					url: form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json',
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					success:function(responses) {
						if(responses.success == true) {
              
                            let p_email = document.getElementById("patient_email").value;

            $("#messages").html('<div class="alert alert-info alert-dismissible fade show" role="alert">'+
              '<span class="alert-icon"><i class="ni ni-check-bold"></i></span>'+
              '<span class="alert-text"><strong>Thank you!,</strong> '+
              responses.message + '<hr>'+
  '<p class="mb-0"><a style="color:#000;text-decoration:none;" href="payments_page?patientID='+p_email+'">Proceed to Payment</a></p></span>'+

						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  '</div>');

							$('input[type="text"]').val('');
							$(".fileinput-remove-button").click();
						}
						else {

            $("#messages").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
              '<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>'+
              '<span class="alert-text"><strong>Sorry!,</strong> '+
              responses.message + '</span>'+

						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  '</div>');
						}
					}
				});

				return false;
			});
		});
	</script>

</body>

</html>