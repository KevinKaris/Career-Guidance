<?php
include 'connection.php';

$SELECT = "SELECT DISTINCT course_name FROM courses WHERE course_name LIKE '%" . $_POST['txt'] . "%' LIMIT 10";

$run = mysqli_query($connection, $SELECT);

while ($details = mysqli_fetch_assoc($run)) {
    echo "<a href='javascript:void();'>" . $details['course_name'] . "</a>";
}

?>
<html><a href=""></a></html>