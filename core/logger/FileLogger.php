<?php

namespace core\logger;

use core\event\Event;
use core\logger\api\Logger;
use Throwable;

class FileLogger implements Logger
{
    public function __construct( )
    {
        if(DEBUG){
            error_reporting(-1);
        } else {
            error_reporting(0);
        }

        set_exception_handler([$this, 'exeptionHandler']);
        set_error_handler([$this, 'errorHandler']);
        ob_start();
        register_shutdown_function([$this, 'fatalErrorHandler']);

    }

    public function errorHandler($errstr, $errfile, $errline)
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

    public function exeptionHandler(Throwable $e)
    {
        $this->log($e->getMessage(), $e->getFile(), $e->getLine());
    }

    public function log($message= '', $file='', $line = '', $tag = 'DEBUG')
    {
        $log = "[" . date('Y-m-d H:i:s') . "] 
        Тэг: {$tag} | 
        Текст ошибки: {$message} | 
        Файл: {$file} |
        Строка: {$line} | \n=================\n";
        file_put_contents(LOG . '/error.log', $log, FILE_APPEND);
    }

    public function logEvent(Event $event)
    {
        log($event->name(), $event->description());
    }
}