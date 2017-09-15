<?php
require('connection.php');
$service = $_POST["service"];
$email = $_POST["email"];
$phone = $_POST["phone"];

// echo $service;
// echo $email;
// echo $phone;

$sql = "INSERT INTO `booking`(`service`, `email`, `phone`) VALUES ('$service','$email','$phone')";
$result = $conn->query($sql);

mysqli_close($conn);
echo "SUCCESS";
header("Location: thankyou.php");

?>
