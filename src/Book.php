<?php
// Book.php
class Book {
    // Properties (Attributes)
    public string $title;
    public string $author;
    public int $year;

    // Constructor (to initialize an object)
    public function __construct(string $title, string $author, int $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }

    // Method (Function)
    public function getBookInfo(): string {
        return "{$this->title} by {$this->author}, published in {$this->year}.";
    }
}
