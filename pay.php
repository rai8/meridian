<?php
        include_once('KipochiPaymentGateway.php');
        
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost","tbcappor_dev","mandenno@123","tbcappor_bliss");
        $query = mysqli_query($connect, "SELECT * FROM details WHERE id='$id'");
        $row = mysqli_fetch_array($query);
        $phone = $row['phone'];
        $id = $row['id'];
        $patient_email = $row['email'];
        $merchant_reference = md5($row['created_at']);
        
        $slash_char = substr($phone, 1);
        $international_format = '254'.$slash_char;
        
        // echo $international_format;
       
        $apiKey="2b80133b631cbcbe9feb7acc75947102";//Merchant's API KEY
        
        $username="mandenno"; //Merchant's API USERNAME
        
        $callbackURL="http://bliss.nupola.com/call_back.php?p_email=$patient_email&merchant_id=$merchant_reference"; //Callback URL to receive payment response
        
        $amount = "1"; //Amount to be paid
        
        $phoneNumber = $international_format;//phone number (in internation format) to receive payment request
        
        $gway = new STKPUSH();
       
        $response = $gway->sendSTKpushRequest($apiKey, $username, $amount, $phoneNumber, $callbackURL, $merchant_reference);
       
        echo $response;
        
        //Handle the JSON response from gateway
        //{"status":"success", "message":"Success. Request accepted for processing"}
        //{"status":"error", "errorMessage":"error message"}
       

?>