<?php

/**
 * Format a date string into 'F d, Y' format (e.g. "January 01, 2023").
 *
 * Extracted from detail.php.
 *
 * @param string $date Date string in 'Y-m-d' or any strtotime-compatible format.
 * @return string Formatted date, or false-y on invalid input.
 */
function formatTanggal(string $date): string
{
    return date('F d, Y', strtotime($date));
}

/**
 * Remove the '_SX98_.jpg' thumbnail suffix from a Goodreads image URL,
 * returning the original full-size image URL ending in '.jpg'.
 *
 * Extracted from detail.php / search.php.
 *
 * @param string $url Image URL possibly containing '_SX98_.jpg'.
 * @return string Cleaned URL.
 */
function hapusStringSX98(string $url): string
{
    if (preg_match("/_SX98_.jpg/", $url)) {
        $result = preg_replace("/_SX98_.jpg/", "", $url);
        return $result . 'jpg';
    }
    return $url;
}

/**
 * Strip the Goodreads dynamic-resize suffix from an image URL.
 * The pattern matches '._<anything>_' (case-insensitive).
 *
 * Extracted from gambar.php.
 *
 * @param string $imageUrl Raw image URL from Goodreads API.
 * @return string Cleaned image URL.
 */
function cleanImageUrl(string $imageUrl): string
{
    $pattern = '/\._(.*)_/i';
    return preg_replace($pattern, '', $imageUrl);
}

/**
 * Build an affiliate link by appending the book title.
 *
 * Extracted from affiliate.php.
 *
 * @param string $title Book title.
 * @return string Full affiliate URL.
 */
function buildAffiliateUrl(string $title): string
{
    $base = "https://www.5mno3.com/scripts/un981c6l?a_aid=9d66035e&a_bid=e86303d4";
    return $base . $title;
}

/**
 * Check whether a search query or book identifier contains a blocked term
 * from the DMCA blocklist.
 *
 * Extracted from dmcaRemover.php.
 *
 * @param string $input   The search term or book ID to check.
 * @param array  $blocklist Array of blocked strings.
 * @return bool True if any blocked term is found (case-insensitive).
 */
function isDmcaBlocked(string $input, array $blocklist): bool
{
    $lower = strtolower($input);
    foreach ($blocklist as $blocked) {
        if (str_contains($lower, strtolower($blocked))) {
            return true;
        }
    }
    return false;
}

/**
 * Determine whether a Goodreads image URL is a "no photo" placeholder.
 *
 * Used in detail.php and search.php to decide whether to show a fallback image.
 *
 * @param string $imageUrl The image URL to inspect.
 * @return bool True if the URL contains 'nophoto'.
 */
function isNoPhoto(string $imageUrl): bool
{
    return (bool) preg_match("/nophoto/", $imageUrl);
}

/**
 * Build the Goodreads book-lookup URL for a given ASIN/ISBN.
 *
 * Extracted from gambar.php.
 *
 * @param string $asin Book ASIN or ISBN.
 * @param string $apiKey Goodreads API key.
 * @return string Full API URL.
 */
function buildBookApiUrl(string $asin, string $apiKey): string
{
    return "https://www.goodreads.com/book/isbn/" . $asin . "?key=" . $apiKey;
}

/**
 * Build the Goodreads search URL for an author query.
 *
 * Extracted from detail.php / search.php.
 *
 * @param string $query  Search query (author name or keywords).
 * @param string $apiKey Goodreads API key.
 * @return string Full search URL.
 */
function buildSearchApiUrl(string $query, string $apiKey): string
{
    return "https://www.goodreads.com/search?q=" . $query . "&key=" . $apiKey;
}
