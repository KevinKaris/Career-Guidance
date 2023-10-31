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

$INSERT = "INSERT INTO courses ( course_name, university, minimum_grade, language_grade_required, bio_chem_grade_required, physics_grade_required, mathematics_grade_required, description) VALUES ('$name','$university','$minimum_grade','$language_grade_required','$bio_chem_grade_required','$physics_grade_required','$mathematics_grade_required','$description')";

mysqli_query($connection, $INSERT);

echo '<script>Alert("successful")</script>';
echo '<script>window.location.assign("index.php")</script>';
?>