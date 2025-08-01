<?php
class Book {
    public $title = "أرض زيكولا";
    public function read() {
        echo "the book title is: " . $this->title;
    }
}
$book = new Book();
$book->read();
?>