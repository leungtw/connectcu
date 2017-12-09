<?php
	session_start();
	if(isset($_POST['submit'])){
		if (empty($_POST['uname']) || empty($_POST['psw'])){
			
		}
		else {
			$username = $_POST['uname'];
			$password = $_POST['psw'];
			
			require_once('functions.php');
			$conn = sqlConnect();
			
			$result = $conn->query("SELECT * from users where password='$password' AND username='$username';");
			$rows = $result->num_rows;
			if ($rows == 1){
				$_SESSION['login_user'] = $username;
				header("location: index.php");
			}
			
			$conn->close();
		}
	}
	
?>