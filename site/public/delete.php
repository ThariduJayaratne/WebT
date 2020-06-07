<?php
$nameee = $_POST['id'];
$conn3 = new mysqli("localhost","root","","mydb");
$sql3 = "DELETE FROM users WHERE user_id=$nameee";
mysqli_query($conn3,$sql3);
header("Location:index.html");
include_once 'updateDB.php';
?>
