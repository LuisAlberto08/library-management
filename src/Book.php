<?php
// Book.php
class Book {
    // Properties (Attributes)
    private string $title;
    private string $author;
    private int $year;

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

    // Title Getter
    public function getTitle(): string {
        return $this->title;
    }

    // Author Getter
    public function getAuthor(): string {
        return $this->author;
    }

    // Year Getter
    public function getYear(): int {
        return $this->year;
    }

    
}
