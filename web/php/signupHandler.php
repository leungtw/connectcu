<?php
	require_once('functions.php');
	$conn = sqlConnect();
	
	$returnPage = $_POST['Return'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['psw'];
	$prepeat = $_POST['psw-repeat'];

	//$duplicateUser = mysqli_query("SELECT username FROM users WHERE username = '$username' OR email = '$email'");
	//$duplicateEmail = mysqli_query("SELECT email FROM users WHERE email = '$email'");

	if($password != $prepeat)
	{
		echo "Passwords do not match!";
	}

	//var_dump(mysqli_num_rows($duplicateUser));
	//echo "ShellLab mysqli_num_rows : ".mysqli_num_rows($duplicateUser);

	//if(mysqli_num_rows($duplicateUser) > 0){
		//echo "User already exists!";
	//} 
	//else{
		$sql = "INSERT INTO users (email, username, password) VALUES ('$email' , '$username', '$password');";

		if ($conn->query($sql)===FALSE){
			die('Error!');
		}
	//}
	
	header("Location: ../$returnPage?msg=1");
?>