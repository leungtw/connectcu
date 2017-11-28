<?php

function sqlConnect(){
	/* USE THIS FOR CONNECTING OVER HEROKU */

	$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

	$server = $url["host"];
	$username = $url["user"];
	$password = $url["pass"];
	$db = substr($url["path"], 1);
	*/
	
	// USE THIS FOR CONNECTING LOCALLY (For testing)
	/*
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "connectcu";
	*/
	
	$conn = new mysqli($server, $username, $password, $db);
	
	if ($conn->connect_error){
		die('Could not connect: ' . $conn->connect_error);
	}
	
	return $conn;
}