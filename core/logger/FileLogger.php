<?php

namespace core\logger;

use core\event\Event;
use core\logger\api\Logger;
use Throwable;

class FileLogger implements Logger
{
    public function __construct(){}

    public function log($message= '', $file='', $line = '')
    {
        file_put_contents(
            LOG . '/error.log',
            "[" . date('Y-m-d H:i:s') . "]
            Текст ошибки: {$message} | 
            Файл: {$file} | 
            Строка: {$line}\n=================\n",
            FILE_APPEND);
    }

    public function logEvent(Event $event)
    {
        log($event->description(), $event->name());
    }

    public function configure()
    {
        set_exception_handler([$this, 'exceptionHandler']);
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);
    }

    public function errorHandler($errno, $errstr, $errfile, $errline)
    {
        $this->log($errstr, $errfile, $errline);
    }

    public function fatalErrorHandler()
    {
        $error = error_get_last();
        if (!empty($error) && $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            $this->log($error['message'], $error['file'], $error['line']);
            ob_end_clean();
        } else {
            ob_end_flush();
        }
    }

    public function exceptionHandler(Throwable $e)
    {
        $this->log($e->getMessage(), $e->getFile(), $e->getLine());
    }
}