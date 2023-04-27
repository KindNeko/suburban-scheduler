<?php 
define('DEBUG', 1);
define('ROOT', dirname(__DIR__, 3));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/vendor/core');
define('HELPERS', ROOT . '/vendor/core/helpers');
define('CACHE', ROOT . '/tmp/cache');
define('LOGS', ROOT . '/tmp/logs');
define('ETC', ROOT . '/etc');

// echo ROOT;

require_once ROOT . '/vendor/autoload.php';