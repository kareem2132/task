<?php
include("../db.php");
$id = $_GET["id"];
$query = "SELECT * FROM courses WHERE id = $id";
$s = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

  <?php include "navbar.php"; ?>

  <div class="container mt-5">
    <h3 class="mb-3">Edit Course:</h3>

    <form method="POST" action="update_course.php?id=<?= $id ?>" class="card p-4 shadow-sm">

      <div class="mb-3">
        <input type="text" name="title" class="form-control" placeholder="Title" value="<?= $s['title'] ?>">
      </div>

      <div class="mb-3">
        <input type="text" name="description" class="form-control" placeholder="Description" value="<?= $s['description'] ?>">
      </div>

      <div class="mb-3">
        <input type="text" name="hours" class="form-control" placeholder="Hours" value="<?= $s['hours'] ?>">
      </div>

      <div class="mb-3">
        <input type="text" name="price" class="form-control" placeholder="Price" value="<?= $s['price'] ?>">
      </div>

      <button class="btn btn-success" type="submit">Update</button>
    </form>
  </div>

</body>
</html>
