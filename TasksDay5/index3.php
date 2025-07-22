<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Upload Image</title>
</head>
<body class="p-4">

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $type = $_FILES['image']['type'];
    $allowed = ['image/jpeg', 'image/png'];

    if (in_array($type, $allowed)) {
        $name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp, "image/$name");
        echo "<div class='mb-3'><img src='image/$name' class='img-thumbnail' width='250'></div>";
    } else {
        echo "<div class='alert alert-danger'>Only JPG or PNG images are allowed.</div>";
    }
}
?>

<form method="post" enctype="multipart/form-data" class="w-50">
  <div class="mb-3">
    <label class="form-label">Choose Image</label>
    <input type="file" name="image" class="form-control">
  </div>
  <button class="btn btn-primary">Upload</button>
</form>

</body>
</html>
