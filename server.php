<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

// Create connection
	$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS complaint;";
if ($conn->query($sql) === FALSE) 
{
    echo "Database error 1";
}
$conn = new mysqli($servername, $username, $password, "complaint");

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS `complaint`.`studentdb` 
(`fname` VARCHAR(20),
	`lname` VARCHAR(20), `gender` VARCHAR(20),
	`category` VARCHAR(20), `dept` VARCHAR(30),
	`enroll` VARCHAR(20), `email` VARCHAR(50),
	`mobile` VARCHAR(20), `ctype` VARCHAR(50),
		`complaint` VARCHAR(200) NOT NULL); ";

if ($conn->query($sql) === FALSE)
{
	echo "Database error 3". $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `complaint`.`facultydb` 
(`fname` VARCHAR(20),
	`lname` VARCHAR(20), `gender` VARCHAR(20),
	`category` VARCHAR(20), `dept` VARCHAR(30),
	`empid` VARCHAR(20),`designation` VARCHAR(20),
	`email` VARCHAR(50), `mobile` VARCHAR(20),
	`ctype` VARCHAR(50), `complaint` VARCHAR(200) NOT NULL); ";
	
if ($conn->query($sql) === FALSE)
{
	echo "Database error 3". $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS `complaint`.`admin` 
(`id` INT NOT NULL AUTO_INCREMENT, `name` VARCHAR(20) NOT NULL,
	`email` VARCHAR(50) NOT NULL, `password` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id`)); ";

if ($conn->query($sql) === FALSE)
{
	echo "Database error 3". $conn->error;
}


?>