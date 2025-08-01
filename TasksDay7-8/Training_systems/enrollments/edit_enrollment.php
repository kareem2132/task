<?php
include("../db.php");
$id=$_GET["id"];
$students_q = "SELECT id, name FROM students";
$students_res = mysqli_query($conn, $students_q);
$courses_q = "SELECT id, title FROM courses";
$courses_res = mysqli_query($conn, $courses_q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Enrollment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container mt-5">
        <h3 class="mb-3">Edit Enrollment:</h3>
        <form method="POST" action="update_enrollment.php?id=<?= $id?>" class="shadow-sm card p-4">
            <select name="student_id" class="form-select mb-3" required>
                <option value="">Choose Student</option>
                <?php while ($student = mysqli_fetch_assoc($students_res)): ?>
                    <option value="<?= $student['id'] ?>"><?= $student['name'] ?></option>
                <?php endwhile; ?>
            </select>
            <select name="course_id" class="form-select mb-3" required>
                <option value="">Choose Course</option>
                <?php while ($course = mysqli_fetch_assoc($courses_res)): ?>
                    <option value="<?= $course['id'] ?>"><?= $course['title'] ?></option>
                <?php endwhile; ?>
            </select>
            <div class="mb-3">
                <input type="number" name="grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <input type="datetime-local" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        <button class="btn btn-success">Update Enrollment</button>
</form>
    </div>
    
</body>
</html>