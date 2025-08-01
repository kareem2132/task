<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
        <h3 class="mb-3">Course List</h3>
        <a href="add_course.php" class="btn btn-success mb-3">+ Add Course</a>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                 <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Hours</th>
                <th scope="col">Price</th>
                  <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "SELECT * FROM courses";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "
                        <tr>
                       <td>{$row['title']}</td>
                        <td>{$row['description']}</td>
                       <td>{$row['hours']}</td>
                        <td>{$row['price']}</td>
                        <td>
                      <a href='edit_course.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                       <a href='delete_course.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
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
