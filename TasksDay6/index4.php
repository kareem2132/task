<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h2 class="mb-4">Images in Folder</h2>

    <?php
    $message = "";
    if (isset($_GET['delete'])) {
        $target = $_GET['delete'];
        if (file_exists($target)) {
            unlink($target);
            $message = "<div class='alert alert-success'>Deleted successfully: $target</div>";
        } else {
            $message = "<div class='alert alert-danger'>File not found: $target</div>";
        }
    }

    echo $message;
    ?>

    <table class="table table-dark table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>image path</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $folder = "uploads/";
            $files = glob($folder . "*.png");
            $count = 1;

            foreach ($files as $file) {
                echo "<tr>";
                echo "<td>{$count}</td>";
                echo "<td>$file</td>";
                echo "<td><a href='?delete=$file' class='btn btn-danger btn-sm'>delete</a></td>";
                echo "</tr>";
                $count++;
            }

            if ($count === 1) {
                echo "<tr><td colspan='3'>No images found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
