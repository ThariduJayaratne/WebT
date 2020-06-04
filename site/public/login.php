<?php
// var_dump($_POST);
include_once 'dbh.inc.php';
$name = $_POST['item'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$time = $_POST['time'];
// $sql = "CREATE TABLE users (
//   user_id int(20) AUTO_INCREMENT PRIMARY KEY not null,
//   user_name varchar(256) not null,
//   user_email varchar(256) not null,
//   user_quantity int(12) not null,
//   user_date varchar(256) not null,
//   user_time varchar(256) not null
//   );
// "
$sql = "INSERT INTO users (user_name,user_email,user_quantity,user_date,user_time) VALUES('$name','$email','$quantity','$date','$time');";
mysqli_query($conn,$sql);
header("location: bookingpage.html?booking=success");
?>
