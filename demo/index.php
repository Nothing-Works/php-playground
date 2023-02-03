<?php

$name = "andy";
$greeting = "Hello";
echo "$greeting $name !";
$text = "This is a long paragraph and this is for the homework";
$book = "Dark Matter";
$read = false;
$message = "";
if ($read) {
    $message = "You have read \"$book\"";
} else {
    $message = "You have not read \"$book\"";
}

$books = ['Do Androids Dream of Electric Sheep', 'The Langoliers', 'Hail Mary'];
$booksWithDetails = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'https://example.com',
        'releaseYear' => 2005
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://example.com',
        'releaseYear' => 2021
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'https://example.com',
        'releaseYear' => 2011
    ]
];

function filterByDate(array $books): array
{
    $newBooks = [];
    foreach ($books as $book) {
        if ($book['releaseYear'] >= 2000) {
            $newBooks[] = $book;
        }
    }
    return $newBooks;
}

// array_filter will do the same thing in this case
function filter($items, $fn): array
{
    $newItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $newItems[] = $item;
        }
    }
    return $newItems;
}

function filterByAuthor(array $books, string $author): array
{
    $newBooks = [];
    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $newBooks[] = $book;
        }
    }
    return $newBooks;
}

$filteredBooks = filterByAuthor($booksWithDetails, 'Philip K. Dick');
$filterFunc = filter($booksWithDetails, fn($book) => $book['releaseYear'] >= 2010);

require "index.view.php";