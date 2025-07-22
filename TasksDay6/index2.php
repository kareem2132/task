<?php
session_start();
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['save'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        if (!empty($name) && !empty($email)) {
            $_SESSION['users'][] = ['name' => $name, 'email' => $email];
        }
    } elseif (isset($_POST['clear'])) {
        $_SESSION['users'] = [];
    } elseif (isset($_POST['remove'])) {
        if (!empty($_SESSION['users'])) {
            array_pop($_SESSION['users']);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Session</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">
<div class="container">
    <h2 class="mb-4">📝 Save Users to Session</h2>

    <form method="post" class="mb-3">
        <input type="text" name="name" placeholder="Name" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>

        <button type="submit" name="save" class="btn btn-success">Save</button>
        <button type="submit" name="clear" class="btn btn-danger">Clear Session</button>
        <button type="submit" name="remove" value="1" class="btn btn-warning">Remove Last</button>
    </form>

    <?php if (empty($_SESSION['users'])): ?>
        <div class="alert alert-light text-dark">No users!</div>
    <?php else: ?>
        <table class="table table-bordered table-light text-dark">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['users'] as $user): ?>
                    <tr>
                        <td><?= htmlspecialchars($user['name']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
