<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Server Info</title>
</head>
<body class="p-4">

<div class="container">
    <h4 class="mb-4">Server Information</h4>
    
    <table class="table table-bordered text-center">
        <thead class="table-light">
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHP_SELF</td>
                <td><?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?></td>
            </tr>
            <tr>
                <td>REMOTE_ADDR</td>
                <td><?php echo htmlspecialchars($_SERVER["REMOTE_ADDR"]); ?></td>
            </tr>
            <tr>
                <td>HTTP_USER_AGENT</td>
                <td><?php echo htmlspecialchars($_SERVER["HTTP_USER_AGENT"]); ?></td>
            </tr>
            <tr>
                <td>REQUEST_METHOD</td>
                <td><?php echo htmlspecialchars($_SERVER["REQUEST_METHOD"]); ?></td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>
