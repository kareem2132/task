<?php
$grade = 60;

if (!isset($grade)) {
    echo "ادخل درجتك";
} elseif ($grade >= 50) {
    echo "ناجح";
} else {
    echo "راسب";
}
?>
