<?php
// var_dump($_POST);
include_once 'dbh.inc.php';
$name = $_POST['item'];
$email = $_POST['email'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$time = $_POST['time'];


mysqli_query($conn,$sql);
header("location:bookingthanks.php");

$check=mysqli_query($conn,"SELECT * from users where user_name='$name' and user_email='$email'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0) {
  echo "customer exists";
}
else {
  $sql = "INSERT IGNORE INTO users (user_name,user_email,user_quantity,user_date,user_time) VALUES('$name','$email','$quantity','$date','$time');";
  mysqli_query($conn,$sql);
}
?>
