<?php

$name = "Karim haby";
$email = "Karim@gmail.com";
$city = "Mansoura";
$age = 21;

if (isset($_POST['name'], $_POST['email'], $_POST['city'], $_POST['age'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $city = htmlspecialchars($_POST['city']);
    $age = (int)$_POST['age'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Your Data</title>
</head>
<body style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-4">
                <h4 class="text-center mb-3">Your Data</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td><?php echo $name; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td><?php echo $city; ?></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><?php echo $age; ?></td>
                    </tr>
                </table>
                <a href="index.php" class="btn btn-primary w-100">Back</a>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>