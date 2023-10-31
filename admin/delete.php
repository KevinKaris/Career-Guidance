<?php
include '../connection.php';

$id = $_POST['identity'];

$DELETE = "DELETE FROM courses where course_id = $id";
mysqli_query($connection, $DELETE);

echo '<script>alert("successful")</script>';
echo '<script>window.location.assign("index.php")</script>';
?>