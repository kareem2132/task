<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? 'Unknown User';
    $password = $_POST['password'] ?? '';
    $image    = $_FILES['image'] ?? null;
    $uploadedImage = '';
    $success = false;

    if (!empty($name) && !empty($password) && $image) {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $newName = uniqid('', true) . "." . $ext;
        $uploadPath = 'uploads/' . $newName;
    
        if (move_uploaded_file($image['tmp_name'], $uploadPath)) {
            $uploadedImage = $uploadPath;
    
            $dataFile = 'data.json';
            $products = [];
    
            if (file_exists($dataFile)) {
                $products = json_decode(file_get_contents($dataFile), true);
            }
    
            $products[] = [
                'name' => $name,
                'desc' => $password,
                'email' => $email,
                'image' => $uploadedImage
            ];
    
            file_put_contents($dataFile, json_encode($products, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            $success = true;
        }
    }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1f1f1f;
            color: white;
        }
        .form-control, .form-control:focus {
            background-color: #dfe7f7;
            color: black;
        }
        .form-control::placeholder {
            color: #999;
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php if (isset($success) && $success): ?>
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="<?= $uploadedImage ?>" width="80" height="80" style="object-fit: cover; border-radius: 10px;">
                    <div>
                        <h5 class="mb-1"><?= htmlspecialchars($name) ?></h5>
                        <p class="mb-2 text-muted"><?= htmlspecialchars($email) ?></p>
                        <a href="index.php" class="btn btn-primary btn-sm">Go to Products</a>
                    </div>
                </div>
                <div class="alert alert-success">✅ Account Created Successfully</div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Image</label>
                    <input name="image" type="file" class="form-control" required>
                </div>

                <button class="btn btn-success w-100">Sign Up</button>
            </form>

        </div>
    </div>
</div>
</body>
</html>
