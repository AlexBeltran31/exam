<?php
class Store {
    private array $books;

public function __construct(array $books = []) {
    $this->books = $books;
}
public function addBook(Book $books): void {
    $this->books[] = $books;
}
public function getBooks(): array {
    return $this->books;
}
public function getOldest(): string {
    $oldest = $this->books[0];

    foreach($this->books as $book) {
        if($book->getYear() < $oldest->getYear()) {
            $oldest = $book;
        }
    }
    return "* Oldest book: " . $oldest->getTitle() . " (" . $oldest->getYear() . ")\n";
}
public function getLongest(): string {
    $longest = $this->books[0];

    foreach($this->books as $book) {
        if($book->getPages() > $longest->getPages()) {
            $longest = $book;
        }
    }
    return "* Longest book: " . $longest->getTitle() . " (" . $longest->getPages() . ")\n";
}
public function startsWithA(): string {
    $char = 'A';
    $startsWithA = [];

    foreach($this->books as $book) {
        $title = $book->getTitle();

        if(stripos($title, $char) === 0) {
            $startsWithA[] = $title;
        }
    }
    if (empty($startsWithA)) {
        return "!! No books starting with A.\n";
    }
    $result = "* Books starting with A:\n";
    foreach ($startsWithA as $title) {
        $result .= "-" . $title . "\n";
    }
    return $result;
}
public function searchByAuthor(string $author, $store): void {
    $booksFound = [];
    foreach($store->getBooks() as $book) {
            if(strcasecmp($book->getAuthor(), $author) === 0) {
                $booksFound[$book->getTitle()] = $book;
            }
        }
    if(empty($booksFound)) {
        echo "!! No books found by " . $author . "\n";
        return;
    }
    echo "* Books by " . $author . ": \n";
    foreach($booksFound as $title => $book) {
        echo "-" . $title . "\n";
    }
}
public function searchByGenre(string $genre, $store): void {
    $booksFound = [];
    foreach($store->getBooks() as $book) {
        if(strcasecmp($book->getGenre(), $genre) === 0) {
            $booksFound[$book->getTitle()] = $book;
        }
    }
    if(empty($booksFound)) {
        echo "!! No books found by the genre: " . $genre . "\n";
        return;
    }
    echo "* " . $genre . " books: \n";
    foreach($booksFound as $title => $book) {
        echo "-" . $title . "\n";
    }
}
}