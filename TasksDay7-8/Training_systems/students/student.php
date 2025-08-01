<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container mt-5">
      <h3 class="mb-3">Student list</h3>
      <a href="add_student.php" class="btn btn-success mb-3">+ Add Student</a>
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
         <th scope="col">Date-of-birth</th>
         <th scope="col">Actions</th>
           </tr>
        </thead>
        <tbody>
            <?php
            $q="SELECT * FROM students";
            $res=mysqli_query($conn,$q);
            while($row =mysqli_fetch_assoc($res)){
                echo "
                <tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['date_of_birth']}</td>
                <td>
                <a href='edit_student.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
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