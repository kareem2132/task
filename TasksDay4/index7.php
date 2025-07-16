<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Students Grades</title>
</head>
<body class="bg-dark text-white">

<?php
$students = [
  ["name" => "Karim", "course" => "Algorithms", "grade" => 72],
  ["name" => "Dina", "course" => "Data Science", "grade" => 46],
  ["name" => "Hassan", "course" => "AI", "grade" => 83],
  ["name" => "Laila", "course" => "Networking", "grade" => 35],
  ["name" => "Mahmoud", "course" => "Web Dev", "grade" => 59]
];
?>

<div class="container mt-4">
  <h5 class="text-warning mb-3">Student Grade Table</h5>

  <table class="table table-sm table-bordered text-center table-dark">
    <thead class="table-success">
      <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Grade</th>
        <th>More</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $index => $student): ?>
        <?php $rowClass = $student['grade'] < 50 ? 'table-warning' : ''; ?>
        <tr class="<?= $rowClass ?>">
          <td><?= $student['name'] ?></td>
          <td><?= $student['course'] ?></td>
          <td><?= $student['grade'] ?>%</td>
          <td>
            <button class="btn btn-sm btn-outline-light" data-bs-toggle="modal" data-bs-target="#studentModal<?= $index ?>">
              Details
            </button>

            <div class="modal fade" id="studentModal<?= $index ?>" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content bg-secondary text-white">
                  <div class="modal-header">
                    <h6 class="modal-title">Student Details</h6>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <p><strong>Name:</strong> <?= $student['name'] ?></p>
                    <p><strong>Course:</strong> <?= $student['course'] ?></p>
                    <p><strong>Grade:</strong> <?= $student['grade'] ?>%</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
