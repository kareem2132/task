<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Available Courses</title>
</head>
<body class="bg-success text-white p-5">

<div class="container bg-white text-dark rounded p-4">
    <h3 class="mb-3 text-primary">Available Courses</h3>

    <ul class="list-group">
        <?php
        $courses = ["HTML", "CSS", "JS", "PHP"];

        array_unshift($courses, "Git");

        array_push($courses, "MySQL");

        array_shift($courses);
        foreach ($courses as $course) {
            echo "<li class='list-group-item'>{$course}</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
