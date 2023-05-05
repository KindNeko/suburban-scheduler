<?php

namespace core\logger\api;

use core\event\Event;

interface Logger
{
    public function log($tag, $message);
    public function logEvent(Event $event);
}