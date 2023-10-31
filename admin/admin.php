<?php
session_start();
$_SESSION['login-time'] = time();

include '../connection.php';

$email = $_POST['email'];
$email = stripcslashes($email);
$email = mysqli_real_escape_string($connection, $email);

$password = $_POST['password'];
$password = stripcslashes($password);
$password = mysqli_real_escape_string($connection, $password);

$SELECT = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

$run = mysqli_query($connection, $SELECT);
$num_of_rows = mysqli_num_rows($run);

if ($num_of_rows == 0) {
    echo '<script>alert("Wrong details or you do not have an account. Recheck and try again...")</script>';
    echo '<script>window.location.assign("/career/")</script>';
}
else {
    $run = mysqli_query($connection, $SELECT);
    $details = mysqli_fetch_assoc($run);
    $_SESSION['email'] = $details['email'];
    echo '<script>window.location.assign("index.php")</script>';
}
?>