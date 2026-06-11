<?php
set_time_limit(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL);

$new_mem_limit = '256M';
ini_set('memory_limit', $new_mem_limit);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

$webname = SITE_NAME;
$emailDMCA = DMCA_EMAIL;
