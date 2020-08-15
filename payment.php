<?php

    $patient_id = $_GET['patientID'];
    include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Bliss - Demo</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets2/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">
</head>
<style>
    #hero {
        width: 100%;
        height: 100vh;
        position: relative;
        background: url("assets2/hero-bg.jpg") top center;
        background-size: cover;
        position: relative;
    }

    #hero:before {
        content: "";
        background: rgba(255, 255, 255, 0.8);
        position: absolute;
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
    }
</style>
<body id="hero">
  <div id="app">
    <section class="section">
      <div class="container" style="padding-top: 12%;">
        <div class="row justify-content-center">
          <div class="col-12 col-md-6">
            <div class="card">
                  <div class="card-header">
                    <h4>Pay with</h4>
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
                        Enter your MPESA number below to receive STK Push and enter your password on your mobile phone
                        
                        
                        <?php
                        
                            $query = mysqli_query($connect, "SELECT * FROM details WHERE email='$patient_id'");
                            $row = mysqli_fetch_array($query);
                            $phone = $row['phone'];
                            $id = $row['id'];
                        
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
                                <input type="submit" name="submit" style="background:#009a3e; color:#fff;" class="btn btn-block" value="Send payment request for KES 2.00">
                            </div>
                            
                            <div id="messages"><b>Success. Request accepted for processing, wait...</b></div>
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

                        $("#messages").html('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
                          '<span class="alert-icon"><i class="fas fa-check-double"></i></span>'+
                          '<span class="alert-text"><strong>'+ responses.message + '!,</strong> '+
                          '</span>'+

						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  '</div>');

							$('input[type="text"]').val('');
							$(".fileinput-remove-button").click();
						}
						else {

                            $("#messages").html('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
                              '<span class="alert-icon"><i class="fas fa-times"></i></span>'+
                              '<span class="alert-text"><strong>Sorry!,</strong> '+
                              responses.errorMessage + '</span>'+
    
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