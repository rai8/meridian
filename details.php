<?php 

if($_POST) {
	// database connection
	include('connect.php');

	// check db connection
	if($conn->connect_error) {
		die("Connection Failed : " . $conn->connect_error);
	} 
	else {
		// echo "Successfully Connected";
	}

	$valid = array('success' => false, 'messages' => array());

    $first_name = addslashes($_POST['first_name']);
    $last_name = addslashes($_POST['last_name']);
	$gender = addslashes($_POST['gender']);
	$patient_dob = $_POST['patient_dob'];
	$phone = addslashes($_POST['phone']);
	$email = addslashes($_POST['email']);
	$home_address = addslashes($_POST['home_address']);
	$consultation_category = addslashes($_POST['consultation_category']);
	$branch = addslashes($_POST['branch']);
	$brief_message = addslashes($_POST['brief_message']);
	$today = date("Y-m-d H:i:s");

	// insert into database
	$sql = "INSERT INTO details (first_name, last_name, gender, patient_dob, phone, email, home_address, consultation_category, branch, brief_message, created_at) 
                        VALUES ('$first_name', '$last_name', '$gender', '$patient_dob', '$phone', '$email', '$home_address', '$consultation_category', '$branch', '$brief_message', '$today')";
	
	if($conn->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['message'] = "details saved successfully.";
		
	} 
	else {
		$valid['success'] = false;
		$valid['message'] = "Error while saving";
	}

	$conn->close();

	echo json_encode($valid);

	// upload the file 
}