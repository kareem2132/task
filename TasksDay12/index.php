<?php
class Course {
    public $title;
    public $instructor;
    public function __construct($title, $instructor) {
        $this->title = $title;
        $this->instructor = $instructor;
    }
    public function describe() {
        echo "Course Title: " . $this->title . "<br>";
        echo "Instructor: " . $this->instructor;
    }
}
$course1 = new Course("PHP Basics", "Mr. Ahmed");
$course1->describe();
?>
