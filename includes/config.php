<?php
    if (!defined('SITE_NAME')) define('SITE_NAME', 'Justice 4 ALL');
    if (!defined('SITE_EMAIL')) define('SITE_EMAIL', 'contact@justiceforall.com');
    if (!defined('SITE_PHONE')) define('SITE_PHONE', '+27 12 345 6789');
    if (!defined('SITE_ADDRESS')) define('SITE_ADDRESS', '123 Justice Street, Community District, 0001');

    $base_folder = trim(dirname($_SERVER['SCRIPT_NAME']), '/');

    if (!defined('BASE_URL')) define("BASE_URL", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/" . $base_folder . "/");
?>
