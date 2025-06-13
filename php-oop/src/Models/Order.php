<?php

namespace oop\Models;

use oop\Interfaces\Loggable;
use oop\Traits\Logger;

class Order implements Loggable
{
    use Logger;
}