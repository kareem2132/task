<?php
session_start();

$valid_email = "admin@example.com";
$valid_password = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION["logged_in"] = true;
        header("Location: index.php"); 
        exit();
    } else {
        $error = "بيانات الدخول غير صحيحة.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-color: #1b1b1b;
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-box {
            background-color: #2c2c2c;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            background: #444;
            border: none;
            border-radius: 5px;
            color: white;
            margin-bottom: 15px;
        }
        .login-box button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
        .sample {
            color: #aaa;
            font-size: 12px;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
    <form method="post">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <div class="sample">
        Email: admin@example.com<br>
        Password: 123456
    </div>
</div>

</body>
</html>
