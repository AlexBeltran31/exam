<?php
require 'store.php';
require 'book.php';

$book1 = new Book("Iron Flame", 640, "fantasy", "Rebeca Yarros", 2023);
$book2 = new Book("Atusparia", 219, "novel", "Gabriela Weiner", 2024);
$book3 = new Book("Bunny", 320, "fantasy", "Mona Awad", 2021);
$book4 = new Book("On Earth We're Briefly Gorgeous", 246, "autobiography", "Ocean Vuong", 2019);
$book5 = new Book("Adrenalina", 230, "novel", "Alberto Fuget", 2004);
$book6 = new Book("Are you this?", 232, "autobiography", "Madian Al Jazerah", 2021);
$book7 = new Book("Onyx Storm", 896, "fantasy", "Rebeca Yarros", 2025);
$book8 = new Book("I Who Have Never Known Men", 184, "fantasy", "Jacqueline Harpman", 2022);
$book9 = new Book("White Fragility", 192, "sociology", "Robin DiAngelo", 2018);
$book10 = new Book("The Curious Incident of the Dog in the Night-Time", 226, "novel", "Mark Haddon", 2003);

$store = new Store();
$store->addBook($book1);
$store->addBook($book2);
$store->addBook($book3);
$store->addBook($book4);
$store->addBook($book5);
$store->addBook($book6);
$store->addBook($book7);
$store->addBook($book8);
$store->addBook($book9);
$store->addBook($book10);

echo "*** MY BOOKS IN 2025 ***\n";

echo $store->getOldest();
echo $store->getLongest();
echo $store->startsWithA();

echo $store->searchByAuthor("Rebeca Yarros", $store);
echo $store->searchByGenre("Autobiography", $store);
echo $store->searchByGenre("Horror", $store);