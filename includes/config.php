<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db_name = $_ENV['DB_NAME'];
$db_host = $_ENV['DB_HOST'];
$db_user = $_ENV['DB_USER'];
$db_pass = $_ENV['DB_PASS'];

define('DB_HOST', $db_host);
define('DB_NAME', $db_name);
define('DB_USER', $db_user);
define('DB_PASS', $db_pass);

define('SITE_NAME', 'Justice 4 ALL');
define('SITE_EMAIL', 'contact@justiceforall.com');
define('SITE_PHONE', '+27 12 345 6789');
define('SITE_ADDRESS', '123 Justice Street, Community District, 0001');
?>