<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "haywizzy_seafood";
$port = "3307";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);


function query($query){

	global $conn;

	return mysqli_query($conn, $query);
}



function escape($string){

	global $conn;

	return mysqli_real_escape_string($conn, $string);
}


function fetch_data($result){

	global $conn;

	return mysqli_fetch_array($result);
}


function confirm($result){

	global $conn;

	if (!$result) {
		
		die("Query Failed" . mysqli_error($conn));
	}
}

function row_count($result){

	return mysqli_num_rows($result);
}


?>