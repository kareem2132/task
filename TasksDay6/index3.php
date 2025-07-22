<?php
$message = '';
$uploadDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmp  = $_FILES['image']['tmp_name'];
        $fileName = basename($_FILES['image']['name']);
        $fileExt  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExt, $allowed)) {
            $newName = uniqid('img_', true) . '.' . $fileExt;
            $uploadPath = $uploadDir . date("Y-m-d") . '/' . $newName;

            if (!is_dir(dirname($uploadPath))) {
                mkdir(dirname($uploadPath), 0777, true);
            }

            if (move_uploaded_file($fileTmp, $uploadPath)) {
                $message = '<div class="alert alert-success mt-3">Uploaded to <strong>' . $uploadPath . '</strong></div>';
            } else {
                $message = '<div class="alert alert-danger mt-3">Error uploading the file!</div>';
            }
        } else {
            $message = '<div class="alert alert-danger mt-3">invalid type of image!</div>';
        }
    } else {
        $message = '<div class="alert alert-danger mt-3">Please choose a file first!</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white py-5">
    <div class="container text-center">
        <h3 class="mb-4 bg-danger-subtle text-white p-2 rounded">Secure Image Upload</h3>

        <form method="POST" enctype="multipart/form-data" class="bg-secondary p-4 rounded">
            <div class="input-group">
                <input type="file" name="image" class="form-control" required>
                <button type="submit" class="btn btn-primary">send</button>
            </div>
        </form>

        <?= $message ?>
    </div>
</body>
</html>
