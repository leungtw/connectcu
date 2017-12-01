<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$qid = $_POST['Qid'];
	$message = $_POST['Message'];
	$user = $_POST['User'];
	$sql = "INSERT INTO answers (question_id, message, score, user) VALUES ('$qid', '$message', '0', '$user');";
	
	if ($conn->query($sql)===FALSE){
		die('Error!');
	}
	
	header("Location: ../$returnPage?msg=1");
?>