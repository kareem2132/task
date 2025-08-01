<?php
include("../db.php");

    $id = $_GET['id'];
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $date = $_POST['date'];
    $grade = $_POST['grade'];

    $update_q = "
        UPDATE enrollments
        SET student_id = $student_id,
            course_id = $course_id,
            grade = '$grade',
            enrollment_date = '$date'
        WHERE id = $id
    ";

    mysqli_query($conn, $update_q);
    header("Location: enrollment.php");
?>