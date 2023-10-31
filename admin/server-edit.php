<?php
include '../connection.php';

$id = $_POST['identity'];
$name = $_POST['course-name'];
$university = $_POST['university'];
$minimum_grade = $_POST['minimum_grade'];
$language_grade_required = $_POST['language_grade_required'];
$bio_chem_grade_required = $_POST['bio_chem_grade_required'];
$physics_grade_required = $_POST['physics_grade_required'];
$mathematics_grade_required = $_POST['mathematics_grade_required'];
$description = $_POST['description'];

$UPDATE = "UPDATE courses SET course_name = '$name', university = '$university', minimum_grade = '$minimum_grade', language_grade_required = '$language_grade_required', bio_chem_grade_required = '$bio_chem_grade_required', physics_grade_required = '$physics_grade_required', mathematics_grade_required = '$mathematics_grade_required', description = '$description' WHERE course_id = '$id'";

mysqli_query($connection, $UPDATE);

echo '<script>Alert("successful")</script>';
echo '<script>window.location.assign("index.php")</script>';
?>