<?php 

if (PHP_VERSION < 8) {
    exit('Нужна версия PHP >= 8');
}

require_once dirname(__DIR__) . '/etc/config/global/file-path.php';

$go = 'go';
echo $go;