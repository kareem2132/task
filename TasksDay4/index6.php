<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Passed Students</title>
</head>
<body class="bg-dark text-white">

<?php
$students = [
  "Yassin" => 92,
  "Omar" => 81,
  "Salem" => 59,
  "Lina" => 73,
  "Rami" => 66
];
$passed = array_filter($students, function($grade) {
  return $grade >= 60;
});
?>

<div class="container mt-5">
  <h3 class="text-info fw-bold">Passed Students</h3>
  <ul class="list-group">
    <?php foreach($passed as $name => $grade): ?>
      <li class="list-group-item d-flex justify-content-between">
        <?= htmlspecialchars($name) ?>
        <span class="badge bg-primary"><?= htmlspecialchars($grade) ?>%</span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>

</body>
</html>
