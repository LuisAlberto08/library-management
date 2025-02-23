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
    // Title Setter
    public function setTitle(string $title): void {
        $author = trim($title); // Remove extra spaces
        if (empty($title)) {
            throw new Exception("Title name cannot be empty.");
        }
        $this->title = $title;
    }
    

     // Author Getter
     public function getAuthor(): string {
        return $this->author;
    }

    // Author Setter
    public function setAuthor(string $author): void {
        $author = trim($author); // Remove extra spaces
        if (empty($author)) {
            throw new Exception("Author name cannot be empty.");
        }
        $this->author = $author;
    }
    

    // Year Getter
    public function getYear(): int {
        return $this->year;
    }

    // Year Setter
    public function setYear(int $year): void {
        if ($year <= 0) {
            throw new Exception("Year must be a positive number.");
        }
        $this->year = $year;
    }


}
