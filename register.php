<?php
	
	require_once 'config.php';
	

$firstname = $_POST['first_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$language = $_POST['language'];
$date_of_birth = $_POST['date_of_birth'];
$password = $_POST['password'];

	
	// array for JSON response
	//$response = array();
	
	$result = "INSERT INTO zalego_db(first_name,email,gender,language,date_of_birth,password)VALUES('" . $firstname . "','" . $email . "','".$gender."','".$language."','".$date_of_birth."','".$password."') ";
	
	$item = mysqli_query($link, $result);
        if ($item) {
  
		echo 'successfully registered';
		
		
	} else {
		// failed to insert row
		echo 'Oops! Failed To Insert';
		
	}





