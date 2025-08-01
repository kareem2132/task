<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-info">
    <?php include "navbar.php";?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Students
                      </h5>
                       <?php
                       $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) As total FROM students"));
                        echo "<p class='card-text '>Total Students:<strong>{$count['total']}</strong></p>";
                       ?>
                    <a href="students/student.php" class="btn btn-primary">View Students</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Courses
                        </h5>
                        <?php
                        $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) As total FROM courses"));
                        echo "<p class='card-text '>Total courses:<strong>{$count['total']}</strong></p>";
                        ?>
                        <a href="courses/course.php" class="btn btn-warning">View Courses</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">
                            Enrollments
                        </h5>
                        <?php
                        $count=mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) As total FROM enrollments"));
                        echo "<p class='card-text '>Total courses:<strong>{$count['total']}</strong></p>";
                        ?>
                        <a href="enrollments/enrollment.php" class="btn btn-success">View Enrollments</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
</html>