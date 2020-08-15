
<?php

  class STKPUSH {
      
    public function sendSTKpushRequest($apiKey, $username, $amount, $phoneNumber, $callback, $merchant_reference) {
      $curl_post_data = array( 
        'apiKey'      => $apiKey, 
        'username'   => $username,
        'amount'      => $amount, 
        'phoneNumber' => $phoneNumber,
        'callback'    => $callback,
        'merchant_reference' => $merchant_reference
        ); 
        
       //Kipochi paymentgateway Url
        $ch = curl_init("https://kipochi.angani.co/api/v1/stk_request/processRequest.php");
        $data = http_build_query($curl_post_data);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_TIMEOUT, 80);
         
        $response = curl_exec($ch);
        if(curl_error($ch)){
        $error=curl_error($ch);
        $error_response='{"status":"error", "message":"'.$error.'"}';
        return $error_response;
        }
        else
        {
        return $response;
        }
         
        curl_close($ch);
    }
    
    
}




?>