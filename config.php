<?php
/**
 * Application configuration.
 *
 * API keys are read from environment variables so that secrets
 * are never committed to version control.
 *
 * Set GOODREADS_API_KEY in your server environment or in a
 * .env file that is *not* tracked by git.
 */

$goodreads_api_key = getenv('GOODREADS_API_KEY');

if (!$goodreads_api_key) {
    error_log('WARNING: GOODREADS_API_KEY environment variable is not set.');
    $goodreads_api_key = '';
}
