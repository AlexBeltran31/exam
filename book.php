<?php
class Book {
    private string $title;
    private int $pages;
    private string $genre;
    private string $author;
    private int $year;

public function __construct(string $title, int $pages, string $genre, string $author, int $year) {
    $this->title = $title;
    $this->pages = $pages;
    $this->genre = $genre;
    $this->author = $author;
    $this->year = $year;
}
public function getTitle(): string {
    return $this->title;
}
public function getYear(): int {
    return $this->year;
}
public function getAuthor(): string {
    return $this->author;
}
public function getGenre(): string {
    return $this->genre;
}
public function getPages(): string {
    return $this->pages;
}
}