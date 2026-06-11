<?php

/**
 * Remove the _SX98_ thumbnail suffix from Goodreads image URLs
 * to get the full-size image.
 */
function hapusStringSX98($url)
{
    if (preg_match("/_SX98_.jpg/", $url)) {
        $result = preg_replace("/_SX98_.jpg/", "", $url);
        return $result . 'jpg';
    } else {
        return $url;
    }
}

/**
 * Search Goodreads for books matching a query string.
 * Returns an array of work results.
 */
function searchGoodreads($query, $caller = '')
{
    $url = "https://www.goodreads.com/search?q=" . urlencode($query) . "&key=yepSbX0wOTBiypm7RRQ3A";
    $parse = @simplexml_load_file($url);

    $rows = [];
    if ($parse !== false && isset($parse->search->results->work)) {
        $result = $parse->search->results->work;
        foreach ($result as $hasil) {
            $rows[] = $hasil;
        }
    } else {
        error_log($caller . ": Failed to load or parse search results for query: " . $query);
    }

    return $rows;
}

/**
 * Render a book card component with image and title.
 * Handles the "nophoto" fallback image automatically.
 */
function renderBookCard($row, $linkStyle = '')
{
    $imageUrl = $row->best_book->image_url;
    $bookId = $row->best_book->id;
    $title = $row->best_book->title;
    $authorName = $row->best_book->author->name;

    $isNoPhoto = preg_match("/nophoto/", $imageUrl);
    $imgSrc = $isNoPhoto ? "asset/image/book-2.png" : hapusStringSX98($imageUrl);
    $styleAttr = $linkStyle ? ' style="' . $linkStyle . '"' : '';
    ?>
    <div class="img mb-3">
        <a href="detail.php?book=<?= $bookId ?>">
            <img src="<?= $imgSrc ?>" width="150" height="200" alt="<?= $title ?>" />
        </a>
    </div>
    <a<?= $styleAttr ?> href="detail.php?book=<?= $bookId ?>">
        <p><?= $title ?></p>
    </a>
    <p class="text-secondary" style="margin-top: -10px;"> By <?= $authorName ?> </p>
    <?php
}
