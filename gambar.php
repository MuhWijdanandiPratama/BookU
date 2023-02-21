<?php

// Asli
// $url = "https://www.goodreads.com/book/isbn/".$asin."?key=yepSbX0wOTBiypm7RRQ3A";

$url = "https://www.goodreads.com/book/isbn/" . $asin . "?key=akKZKemj3wGTLvq9MARTA";

$parse = simplexml_load_file($url);

$gambar = $parse->book->image_url;
$pattern = '/\._(.*)_/i';
$gambarx = preg_replace($pattern, '', $gambar);
$title = $parse->book->title;
$desc = $parse->book->description;
$author = $parse->book->authors->author->name;

$publication_year = $parse->book->publication_year;
$publication_month = $parse->book->publication_month;
$publication_day = $parse->book->publication_day;

$average_rating = $parse->book->average_rating;

$num_pages = $parse->book->num_pages;
