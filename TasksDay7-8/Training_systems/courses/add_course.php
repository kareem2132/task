<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container mt-5">
        <h3 class="mb-3">New Course:</h3>

        <form method="POST" action="insert_course.php" class="card shadow-sm p-4">
            <div class="mb-3">
                <input type="text" name="title" placeholder="Title" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="description" placeholder="Description" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="hours" placeholder="Hours" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="price" placeholder="Price" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Add Course</button>
        </form>
    </div>
</body>
</html>
