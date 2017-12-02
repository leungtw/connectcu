<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email');";
	
	if ($conn->query($sql)===FALSE){
		die('Error!');
	}
	
	header("Location: ../$returnPage?msg=1");
?>