<?php

session_start();

$searchTerm = $_POST['searchTerm'] ?? false;

$booksJson = file_get_contents('../books.json');
$books = json_decode($booksJson, true);


foreach ($books as $title => $book){
    if ($title != $searchTerm){
        unset($books[$title]);
    }
}

$haveBooks = count($books) > 0;

$_SESSION['results'] = [
    'books' => $books,
    'haveBooks' => $haveBooks,
    'searchTerm' => $searchTerm,

];


header('Location: done.php');