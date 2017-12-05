<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$email = $_POST['email'];
	$username = $_POST['username'];

	$duplicateUser = mysql_query("SELECT username from users WHERE username = '$username'");
	$duplicateEmail = mysql_query("SELECT email from users WHERE email = '$email'");

	if(mysql_num_rows($duplicateEmail) > 0){
		echo "Email already exists!";
	} elseif (mysql_num_rows($duplicateUser) > 0) {
		echo "Username already exists!";
	}
	else{
		$sql = "INSERT INTO users (email, username) VALUES ('$email', '$username');";
	}

	
	if ($conn->query($sql)===FALSE){
		die('Error!');
	}
	
	header("Location: ../$returnPage?msg=1");
?>