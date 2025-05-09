<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$conn = mysqli_connect($name, $email, $mobile, $subject, $message, $db_name);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>