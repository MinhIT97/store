<?php

use App\Entities\Option;

if (!function_exists('getOption')) {
    function getOption($key)
    {
        return Option::getOption($key);
    }
}
