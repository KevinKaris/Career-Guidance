<?php
session_start();
$_SESSION['login-time'] = time();

include 'connection.php';

$email = $_POST['email'];
$email = stripcslashes($email);
$email = mysqli_real_escape_string($connection, $email);

$password = $_POST['password'];
$password = stripcslashes($password);
$password = mysqli_real_escape_string($connection, $password);

$SELECT = "SELECT * FROM student WHERE email = '$email'";
$INSERT = "INSERT INTO student (email, password) VALUES('" . $email . "', '" . $password . "')";

$run = mysqli_query($connection, $SELECT);
$num_of_rows = mysqli_num_rows($run);

if ($num_of_rows == 0) {
    $run = mysqli_query($connection, $INSERT);
    $SELECT = "SELECT * FROM student WHERE email = '$email'";
    $run2 = mysqli_query($connection, $SELECT);
    $details = mysqli_fetch_assoc($run2);
    $_SESSION['email'] = $details['email'];
    echo '<script>window.location.assign("/career/")</script>';
}
else {
    echo '<script>alert("Your email exists!!")</script>';
    echo '<script>window.location.assign("/career/")</script>';
}
?>