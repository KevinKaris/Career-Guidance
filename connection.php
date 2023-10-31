<?php
$db = 'career';
$host = 'localhost';
$username = 'root';
$password = '';

$connection = new mysqli($host, $username, $password, $db);

if ($connection->connect_error) {
    die('Connection to database failed!');
}
?>