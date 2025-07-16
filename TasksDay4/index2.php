<?php
$languages = ["PHP", "Python", "JavaScript", "Java", "C++"];
echo "Languages Count: " . count($languages) . "<br>";
if (in_array("JavaScript", $languages)) {
    echo "JavaScript is in the list.<br>";
} else {
    echo "JavaScript is NOT in the list.<br>";
}
echo "All Languages: ";
print_r(array_values($languages));
?>
