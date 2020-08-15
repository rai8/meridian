<?php

    $patient_id = $_GET['patientID'];
    include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Meridian</title>
  <link href="./assets/img/favicon m.png" rel="icon" sizes="16x16" type="image/png" />
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets2/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style>
    #hero {
        width: 100%;
        min-height: 100vh;
        position: relative;
        background-color: #fff center;
        background-size: cover;
        position: relative;
    }

    #hero:before {
        content: "";
        padding-top: 0;
        margin-top: 0;
        background: rgba(255, 255, 255, 0.8);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }
</style>

<body>
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
<div id="hero">
  <div id="app">
    <section class="section">
      <div class="container" style="padding-top: 12%;">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div class="card">
                  <div class="card-header">
                    <h4 style="color:#442e5d">Pay with</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab"
                          aria-controls="home" aria-selected="true" style="color:#009a3e"><b>Mpesa Express</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab"
                          aria-controls="profile" aria-selected="false" style="color:#f00">Others</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab2">
                        Click "<b>Send payment request</b>" button to the MPESA number below and enter your PIN on your mobile phone within 10-15 seconds.
                        
                        
                        <?php
                        
                            $query = mysqli_query($connect, "SELECT * FROM details WHERE email='$patient_id'");
                            $row = mysqli_fetch_array($query);
                            $phone = $row['phone'];
                            $id = $row['id'];
                            $merchant_id = md5($row['created_at']);
                        
                        ?>

                        <form action="pay.php?id=<?php echo $id; ?>" method="post" id="details-form">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="phone" class="form-control" id="inputFocus" value="<?php echo $phone; ?>" readonly="readonly">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <img src="assets2/mpesa.png" width="30" height="30" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" style="background:#009a3e; color:#fff;" class="btn btn-block" value="Send payment request">
                            </div>
                            <div id="messages"></div>
                            <div id="second_messages"></div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                        Pending...
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets2/js/app.min.js"></script>
  <script src="assets2/js/scripts.js"></script>

  <script>
    $('#inputFocus').focus(function() {
        $('#inputFocus').css('border','1px solid #009a3e');
    });
  </script>
  
  <script type="text/javascript">
  
		$(document).ready(function() {
			$("#details-form").unbind('submit').bind('submit', function() {

				var form = $(this);
				var formData = new FormData($(this)[0]);

				$.ajax({
					url: form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'JSON',
					cache: false,
					contentType: false,
					processData: false,
					async: false,
					success:function(responses) {
						if(responses.status = 'success') {
                            //check payment status
                            //the pay_id should be the generated merchant ID generated at pay.php. Please find out to get the value
                            let pay_id = '<?php echo $merchant_id; ?>';
						checkPayment(pay_id);	
							
						}
						else {

                            $("#messages").html('<div>'+
                              '<span><strong>Sorry!,</strong> '+
                              responses.errorMessage + '</span>'+'</div>');
						}
					}
				});

				return false;
			});
		});

//check payment status
        function checkPayment(pay_id){
                    $("#messages").html('<div>'+
                          '<span><strong>Request sent! Check your phone to reply</strong> '+
                          '</span>'+'</div>');
							
							    
						    $.ajax({
                    url:'detect_payment.php',
                    method:'POST',
                    data:{
                    pay_id:pay_id
                    },
                     success:function(responses){
                         
                         if(responses.status = 'success'){
                            setTimeout(() => {  
                              $("#second_messages").html('<div>'+
                          '<span><strong>Payment received successfully!</strong> '+
                          '</span>'+'</div>');
                              
                              setTimeout(() => {
                                window.location.href = 'http://bliss.nupola.com/dialog_box?id=<?php echo $id;?>';
                              }, 9000);
                              
                            }, 17000);
                              
                          }
                            
                          else if(responses.status = 'pending'){
                              
                            checkPayment(pay_id);
                              
                              $("#second_messages").html('<div>'+
                          '<span><strong>Payment pending! Check your phone to reply.</strong> '+
                          '</span>'+'</div>');
                              
                          }
                       
                       
                        
                    },
                    failure: function(jqXHR, textStatus, errorThrown){ 
                        console.log(textStatus);
                    }
                });
							
                            
                
                }
        
	</script>
  
  
</body>
</html>