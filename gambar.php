<?php

// Asli
// $url = "https://www.goodreads.com/book/isbn/".$asin."?key=yepSbX0wOTBiypm7RRQ3A";

$url = "https://www.goodreads.com/book/isbn/".$asin."?key=akKZKemj3wGTLvq9MARTA";

$parse = simplexml_load_file($url);

$gambar = $parse->book->image_url;
$pattern = '/\._(.*)_/i';
$gambarx = preg_replace($pattern, '', $gambar);
$title = $parse->book->title;
$desc = $parse->book->description;
$author = $parse->book->authors->author->name;
?>