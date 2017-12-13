<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$subject = $_POST['Subject'];
	$question = $_POST['Question'];
	$user = $_POST['User'];
	$sql = "INSERT INTO questions (message, subject, score, user) VALUES ('$question', '$subject', '0', '$user');";
	
	if ($conn->query($sql)===FALSE){
		die('Error!');
	}
	
	header("Location: ../$returnPage?msg=1");
?>