<?php

    $servername = "localhost";
    $usernamex = "tbcappor_dev";
    $password = "mandenno@123";
    $dbname = "tbcappor_bliss";

   // Create connection
   $conn = new mysqli("localhost","tbcappor_dev","mandenno@123","tbcappor_bliss");
   // Check connection
   if ($conn->connect_error) 
   {
    echo 'Connection failed';
    die("Connection failed: " . $conn->connect_error);
   } 
   $transtime=$_POST["transtime"];
    
    $p_email = $_GET['p_email'];
    $accountNo =$_GET["merchant_id"];
    $amount =$_POST["amount"];
    $identifier =$_POST["identifier"];
    $ref = $_POST['ref'];
    $today = date("Y-m-d H:i:s");

   // Insert new record into the database
   $sql = "INSERT INTO payment_details (email, identifier, accountNo, amount, transID, transtime, created_at) VALUES
       ('$p_email', '$identifier', '$accountNo', '$amount', '$ref', '$transtime', '$today')";
      if (mysqli_query($conn,$sql)) {
          echo "inserted";
          
      }
      else
      {
          echo "failed:".mysqli_error($conn);
      }