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
 * Configuration file for BookU
 * 
 * For production, set these values via environment variables
 * or create a config.local.php file (excluded from version control).
 */

// Load local config overrides if they exist
if (file_exists(__DIR__ . '/config.local.php')) {
    include __DIR__ . '/config.local.php';
}

// Goodreads API Key
if (!defined('GOODREADS_API_KEY')) {
    $envKey = getenv('GOODREADS_API_KEY');
    define('GOODREADS_API_KEY', $envKey ?: 'YOUR_API_KEY_HERE');
}

// Website settings
if (!defined('SITE_NAME')) {
    define('SITE_NAME', 'BookU');
}

if (!defined('SITE_URL')) {
    define('SITE_URL', 'https://happybooku.com');
}

if (!defined('DMCA_EMAIL')) {
    define('DMCA_EMAIL', 'pratamwijdanandi@gmail.com');
}
