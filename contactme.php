<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"sabariportfoliodata");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `contactdata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>