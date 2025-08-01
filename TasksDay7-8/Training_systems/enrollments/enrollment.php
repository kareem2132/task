<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollments List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container mt-5">
      <h3 class="mb-3">Enrollment List</h3>
      <a href="add_enrollment.php" class="btn btn-success mb-3">+ Add Enrollment</a>
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
         <tr>
         <th scope="col">Student Id</th>
         <th scope="col">Course Id</th>
         <th scope="col">Grade</th>
         <th scope="col">Enrollment Date</th>
         <th scope="col">Actions</th>
         </tr>
        </thead>
        <tbody>
            <?php
            $q = "
            SELECT 
                enrollments.id,
                students.name AS student_name,
                courses.title AS course_title,
                enrollments.grade,
                enrollments.enrollment_date
            FROM enrollments
            JOIN students ON enrollments.student_id = students.id
            JOIN courses ON enrollments.course_id = courses.id
        ";
        
            $res=mysqli_query($conn,$q);
            while($row =mysqli_fetch_assoc($res)){
                echo "
                <tr>
                <td>{$row['student_name']}</td>
                <td>{$row['course_title']}</td>
                <td>{$row['grade']}</td>
                <td>{$row['enrollment_date']}</td>
                <td>
                <a href='edit_enrollment.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='delete_enrollment.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
                </tr>
                ";
            }
            ?>
        </tbody>
        </table>
    </div>
    
</body>
</html>