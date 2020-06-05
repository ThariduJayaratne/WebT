<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
// $dbName = "bookingsystem";

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$dbName = "myDB";

$conn->close();

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql2 = "CREATE TABLE users (
  user_id int(20) AUTO_INCREMENT PRIMARY KEY not null,
  user_name varchar(256) not null,
  user_email varchar(256) not null,
  user_quantity int(12) not null,
  user_date varchar(256) not null,
  user_time varchar(256) not null
);";
mysqli_query($conn,$sql2);
?>
