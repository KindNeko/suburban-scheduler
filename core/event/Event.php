<?php

namespace core\event;

interface Event
{
    public function description(): string;
    public function name(): string;
}