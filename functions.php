<?php
/**
 * Shared utility functions for BookU
 */

/**
 * Remove the _SX98_ thumbnail suffix from Goodreads image URLs
 * to get the full-size image.
 */
function hapusStringSX98($url)
{
    if (preg_match("/_SX98_.jpg/", $url)) {
        $result = preg_replace("/_SX98_.jpg/", "", $url);
        return $result . 'jpg';
    }
    return $url;
}

/**
 * Format a date string to "Month day, Year" format.
 */
function formatTanggal($date)
{
    return date('F d, Y', strtotime($date));
}

/**
 * Sanitize user input for safe HTML output.
 */
function sanitize($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

/**
 * Validate a book ID (ASIN/ISBN format: alphanumeric only).
 */
function isValidBookId($id)
{
    return preg_match('/^[a-zA-Z0-9]+$/', $id);
}

/**
 * Render star rating HTML.
 * 
 * @param float $rating The average rating (0-5)
 * @return string HTML for the star rating display
 */
function renderStarRating($rating)
{
    $html = '<ul class="list-inline mb-0">';
    for ($star = 1; $star <= 5; $star++) {
        if ($rating >= $star) {
            $html .= '<li style="color: gold;" class="list-inline-item"><i class="fa fa-star"></i></li>';
        } elseif ($rating >= $star - 0.5) {
            $html .= '<li style="color: gold;" class="list-inline-item"><i class="fa fa-star-half-alt"></i></li>';
        } else {
            $html .= '<li style="color: #ccc;" class="list-inline-item"><i class="fa fa-star"></i></li>';
        }
    }
    $html .= '</ul>';
    return $html;
}
