<?php
include("../db.php");
$id=$_GET["id"];
$sql="SELECT * FROM students WHERE id=$id";
$s=mysqli_fetch_assoc(mysqli_query($conn,$sql));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
 <?php include "navbar.php";?>
    <div class="container mt-5">
        <h3 class="mb-3">Edit Student:</h3>
        <form method="POST" action="update_student.php?id=<?= $id?>" class="shadow-sm card p-4">
        <div class="mb-3">
            <input type="text" name="name" value="<?= $s['name']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="email" name="email" value="<?= $s['email']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" value="<?= $s['phone']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="date" name="dob" value="<?= $s['date_of_birth']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button class="btn btn-success">Update</button>
</form>
    </div>
    
</body>
</html>