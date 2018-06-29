<?php

/*
symmetric array destructuring
*/

$book = ['The Book Title', 'Bob Belcher'];

//list($title, $author) = $book; // Old

[$firstTitle, $firstAuthor] = $book; //short array syntax

// var_dump($firstTitle, $firstAuthor);

// or

$bookTwo = ['title' => 'A New Book Title', 'author' => 'Linda Belcher'];

['title' => $newTitle, 'author' => $newAuthor] = $bookTwo;

// var_dump($newTitle, $newAuthor);

// also

$bookCollection = [

    ['title' => 'Harry Potter I', 'author' => 'JK Rowling'],

    ['title' => 'Harry Potter II', 'author' => 'JK Rowling']

];

foreach($bookCollection as ['title' => $titleCollection, 'author' => $authorCollection]) {

    var_dump($titleCollection, $authorCollection);

}