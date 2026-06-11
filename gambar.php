<?php

$url = "https://www.goodreads.com/book/isbn/" . $asin . "?key=" . GOODREADS_API_KEY;

$parse = simplexml_load_file($url);

if ($parse === false) {
    $gambarx = '';
    $title = '';
    $desc = '';
    $author = '';
    $publication_year = '';
    $publication_month = '';
    $publication_day = '';
    $average_rating = 0;
    $num_pages = 0;
    $publisher = '';
} else {
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
    $publisher = $parse->book->publisher;
}
