<?php
session_start();

$email = $_SESSION['email'] ?? 'Unknown User';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir);

    $data = file_exists('data.json') ? json_decode(file_get_contents('data.json'), true) : [];

    foreach ($_FILES['images']['tmp_name'] as $key => $tmpName) {
        $originalName = basename($_FILES['images']['name'][$key]);
        $uniqueName = uniqid() . '_' . $originalName;
        $targetPath = $uploadDir . $uniqueName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $data[] = [
                'name' => $name,
                'desc' => $desc,
                'email' => $email,
                'image' => $targetPath
            ];
        }
    }

    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
}

$allData = file_exists('data.json') ? json_decode(file_get_contents('data.json'), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Upload</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
  </style>
</head>
<body class="bg-dark text-white">

<div class="container mt-4">
    <form method="POST" enctype="multipart/form-data">
        <input name="name" class="form-control mb-2" placeholder="Product Name" required>
        <input name="desc" class="form-control mb-2" placeholder="Description" required>
        <input type="file" name="images[]" multiple class="form-control mb-3" required>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add Product</button>
            <a href="signup.php" class="btn btn-outline-light">Signup</a>
        </div>
    </form>

    <hr class="my-4">

    <div class="row">
        <?php foreach ($allData as $item): ?>
            <?php if (!file_exists($item['image'])) continue;?>

            <div class="col-md-4 mb-4">
                <div class="card bg-secondary text-white">
                    <img src="<?= $item['image'] ?>" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5><?= htmlspecialchars($item['name']) ?></h5>
                        <p><?= htmlspecialchars($item['desc']) ?></p>
                        <small>Added by <strong><?= htmlspecialchars($item['email']) ?></strong></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
