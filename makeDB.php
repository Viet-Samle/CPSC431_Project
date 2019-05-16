<?php

$servername = "localhost";
$username = "root";
$password = "donuts24";
$dbname = "boyfriendRental";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$DBsql = "CREATE DATABASE IF NOT EXISTS boyfriendRental";
if($conn->query($DBsql) === TRUE){
	// echo "Database created sucessfully ";
}else{
	echo $conn->error;
}

$conn->query("USE boyfriendRental");

$applicationTable = "CREATE TABLE IF NOT EXISTS APPLICATIONS(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	height FLOAT(2,1) NOT NULL,
	gender VARCHAR(10) NOT NULL,
	message TEXT NOT NULL,

	UNIQUE KEY unique_email(email)
)";
if ($conn->query($applicationTable) === TRUE){
}else{
	echo $conn->error;
	echo '<div class="alert alert-danger">Applications table failed to create</div>';
}

$membersTable = "CREATE TABLE IF NOT EXISTS MEMBERS(
	id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
	# password is stored in md5 hash
	password VARCHAR(50) NOT NULL,
	UNIQUE KEY unique_email(email)
)";
if ($conn->query($membersTable) === TRUE){
	// echo "Members table created successfully ";
}else{
	echo mysqli_errno($conn);
	echo '<div class="alert alert-danger">Members table failed to create</div>';
}

$conn->close();

 ?>
