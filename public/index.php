<?php
use core\logger\ConsoleLogger;
use core\logger\ErrorEvent;
use core\logger\FileLogger;

if (PHP_VERSION < 8) {
    exit('Нужна версия PHP >= 8');
}

require_once dirname(__DIR__) . '/etc/config/global/file-path.php';

$go = 'go';
echo $go;

// $log = new ConsoleLogger();
// $test = "message";
// $log->log($tet);

// $event = new ErrorEvent("Exception", $test);
// $log->log($event);

$log = new FileLogger();
// throw new Exception('Возникла ошибочка', 404);
echo $tr;
