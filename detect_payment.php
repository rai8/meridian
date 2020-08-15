<?php 

    $con = mysqli_connect("localhost","tbcappor_dev","mandenno@123","tbcappor_bliss");
    
    $id = $_POST['pay_id'];
    
    $sql = mysqli_query($con, "SELECT * FROM payment_details WHERE accountNo = '$id'");
    
    if(mysqli_num_rows($sql) > 0){
        echo '{"status":"success"}';
    }else{
        echo '{"status":"pending"}'; 
    }

?>