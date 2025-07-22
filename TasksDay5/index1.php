<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Check Access</title>
</head>
<body class="p-4">
<div class="container">

    <?php
    $ip = $_SERVER["REMOTE_ADDR"];

    if ($ip === "127.0.0.1" || $ip === "::1") {
        echo '<div class="alert alert-success text-center">';
        echo "Access OK: GOOD host";
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger text-center">';
        echo "Access Denied: Invalid host";
        echo '</div>';
    }
    ?>

</div>
</body>
</html>
