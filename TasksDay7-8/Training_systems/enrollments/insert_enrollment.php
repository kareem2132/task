<?php
include("../db.php");

    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $grade = $_POST['grade'];
    $date = $_POST['date'];

    $insert_q = "INSERT INTO enrollments (student_id, course_id,grade,enrollment_date) 
                 VALUES ($student_id, $course_id,'$grade','$date')";

    mysqli_query($conn, $insert_q);
    header("Location:enrollment.php");
?>