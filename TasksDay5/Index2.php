<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>User Form</title>
</head>
<body class="bg-primary bg-gradient text-white">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6 bg-white text-dark p-4 rounded shadow">
        
        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
          <?php
            $name  = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $age   = $_POST['age'] ?? '';
            $city  = $_POST['city'] ?? '';
          ?>
          <h4 class="mb-3">User Profile</h4>
          <p>Welcome, <strong><?= htmlspecialchars($name) ?></strong></p>
          <table class="table table-bordered">
            <tr><th>Name</th><td><?= htmlspecialchars($name) ?></td></tr>
            <tr><th>Email</th><td><?= htmlspecialchars($email) ?></td></tr>
            <tr><th>Age</th><td><?= htmlspecialchars($age) ?></td></tr>
            <tr><th>City</th><td><?= htmlspecialchars($city) ?></td></tr>
          </table>
          <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-primary">Back</a>
        
        <?php else: ?>
          <h4 class="mb-3">User Information</h4>
          <form method="POST">
            <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="number" name="age" class="form-control mb-2" placeholder="Age" required>
            <input type="text" name="city" class="form-control mb-3" placeholder="City" required>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        <?php endif; ?>

      </div>
    </div>
  </div>
</body>
</html>
