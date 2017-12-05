<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$email = $_POST['email'];
	$username = $_POST['username'];

	$duplicateUser = "SELECT username from users WHERE username = '$username';";
	$duplicateEmail = "SELECT email from users WHERE email = '$email';";

	if($duplicateEmail){
		echo "Email already exists";
	} elseif ($duplicateUser) {
		echo "Username already exists";
	}
	else{
		$sql = "INSERT INTO users (email, username) VALUES ('$email', '$username');";
	}

	
	if ($conn->query($sql)===FALSE){
		die('Error!');
	}
	
	header("Location: ../$returnPage?msg=1");
?>