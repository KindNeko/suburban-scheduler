<?php

namespace core\api;

interface Logger
{
    public function log($tag, $message);
}