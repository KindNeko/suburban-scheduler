<?php

namespace core\logger;

error_reporting(-1);

use core\event\Event;
use core\logger\api\Logger;

class FileLogger implements Logger
{
    public function log($message, $tag = "DEBUG")
    {
        $log = "[" . date('Y-m-d H:i:s') . "] ТЭГ: {$tag} | Текст ошибки: {$message}\n=================";
        file_put_contents(LOG . '/error.log', $log . PHP_EOL, FILE_APPEND);
    }

    public function logEvent(Event $event)
    {
        log($event->name(), $event->description());
    }
}