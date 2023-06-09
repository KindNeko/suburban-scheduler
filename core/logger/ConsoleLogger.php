<?php

namespace core\logger;

use core\event\Event;
use core\logger\api\Logger;

class ConsoleLogger implements Logger
{
    public function log($tag = "DEBUG", $message = '')
    {
        $time = date('Y-m-d h:i:s');
        echo ("<script>console.log('[$time $tag] - {$message}')</script>");
    }

    public function logEvent(Event $event)
    {
        log($event->description(), $event->name());
    }
}