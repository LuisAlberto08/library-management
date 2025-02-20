<?php
require_once "src/Book.php"; 

    $book1 = new Book("Simulacra and Simulation", "Jean Baudrillard",1981);
    $book2 = new Book("Ubik","Philip K. Dick", 1969);
    $book3 = new Book("Neuromancer","William Gibson",1984);

    echo $book1->getBookInfo() . PHP_EOL;
    echo $book2->getBookInfo() . PHP_EOL;
    echo $book3->getBookInfo() . PHP_EOL;


?>