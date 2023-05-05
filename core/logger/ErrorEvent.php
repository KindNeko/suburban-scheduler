<?php

namespace core\logger;

use core\event\Event;

class ErrorEvent implements Event
{
    private $errorName;
    private $errorMessage;
    public function __construct($errorName, $errorMessage)
    {
        $this->errorName = $errorName;
        $this->errorMessage = $errorMessage;
        $this->__toString();
    }

    public function name(): string
    {
        return self::$errorName;
    }
    public function description(): string
    {
        return self::$errorMessage;
    }

    public function __toString()
    {
        return "{$this->errorName}, {$this->errorMessage}";
    }
}