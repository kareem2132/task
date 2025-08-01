<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container mt-5">
        <h3 class="mb-3">Add New Student:</h3>
        <form method="POST" action="insert_student.php" class="shadow-sm card p-4">
        <div class="mb-3">
            <input type="text" name="name" placeholder="Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="email" name="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="text" name="phone" placeholder="Phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <input type="date" name="dob" placeholder="Date Of Birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button class="btn btn-success">Add Student</button>
        
</form>
    </div>
    
</body>
</html>