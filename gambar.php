<?php

$url = "https://www.goodreads.com/book/isbn/" . $asin . "?key=akKZKemj3wGTLvq9MARTA";

$parse = @simplexml_load_file($url);

if ($parse === false) {
    error_log("gambar.php: Failed to load or parse XML from URL: " . $url);
    $gambarx = '';
    $title = 'Unknown Title';
    $desc = 'Description not available.';
    $author = 'Unknown Author';
    $publication_year = '';
    $publication_month = '';
    $publication_day = '';
    $average_rating = 0;
    $num_pages = 'N/A';
    $publisher = 'Unknown Publisher';
} else {
    $gambar = $parse->book->image_url;
    $pattern = '/\._(.*)_/i';
    $gambarx = preg_replace($pattern, '', $gambar);
    $title = (string) $parse->book->title ?: 'Unknown Title';
    $desc = (string) $parse->book->description ?: 'Description not available.';
    $author = (string) $parse->book->authors->author->name ?: 'Unknown Author';

    $publication_year = (string) $parse->book->publication_year;
    $publication_month = (string) $parse->book->publication_month;
    $publication_day = (string) $parse->book->publication_day;

    $average_rating = (float) $parse->book->average_rating;

    $num_pages = (string) $parse->book->num_pages ?: 'N/A';
    $publisher = (string) $parse->book->publisher ?: 'Unknown Publisher';
}
