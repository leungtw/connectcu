<?php
	
	if ($_POST['action'] == 'upvote'){
		upVote($_POST['id']);
	}
	else if ($_POST['action'] == 'downvote'){
		downVote($_POST['id']);
	}
	
	function upVote($qID){
		require_once('functions.php');
		$conn = sqlConnect();
		$sql = "UPDATE questions SET score = score + 1 WHERE id = '$qID';";
		if ($conn->query($sql)===FALSE){
			die('Error!');
		}
		$conn->close();
	}
	
	function downVote($qID){
		require_once('functions.php');
		$conn = sqlConnect();
		$sql = "UPDATE questions SET score = score - 1 WHERE id = '$qID';";
		if ($conn->query($sql)===FALSE){
			die('Error!');
		}
		$conn->close();
	}
	
?>