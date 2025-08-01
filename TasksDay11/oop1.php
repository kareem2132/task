<?php
class Course {
    public $title;
    public $instructor;

    public function __construct($title, $instructor) {
        $this->title = $title;
        $this->instructor = $instructor;
    }

    public function describe() {
        echo "title, instructor, " . $this->title . ", " . $this->instructor;
    }
}

$course = new Course("oop ", "mohamed");
$course->describe();
?>