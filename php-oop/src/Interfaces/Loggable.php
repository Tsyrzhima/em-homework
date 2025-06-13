<?php

namespace oop\Interfaces;

interface Loggable
{
    public function log(string $message): void;
}