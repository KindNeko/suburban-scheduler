<?php 
define('DEBUG', 1);
define('ROOT', dirname(__DIR__, 3));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/core');
define('HELPERS', ROOT . '/core/helpers');
define('CACHE', ROOT . '/tmp/cache');
define('LOG', ROOT . '/tmp/log');
define('ETC', ROOT . '/etc');

require_once ROOT . '/vendor/autoload.php';