<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

    define('DB_HOST', $_ENV['DB_HOST'] ?? 'localhost');
    define('DB_NAME', $_ENV['DB_NAME'] ?? 'law_firm_db');
    define('DB_USER', $_ENV['DB_USER'] ?? 'kamva');
    define('DB_PASS', $_ENV['DB_PASS'] ?? '');

    define('SITE_NAME', 'Justice 4 ALL');
    define('SITE_EMAIL', 'contact@justiceforall.com');
    define('SITE_PHONE', '+27 12 345 6789');
    define('SITE_ADDRESS', '123 Justice Street, Community District, 0001');

    $base_folder = trim(dirname($_SERVER['SCRIPT_NAME']), '/');

    define("BASE_URL", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/" . $base_folder . "/");
?>