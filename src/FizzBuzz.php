<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function handler(int $value):string
    {
        if ($value === 2)
        {
            return '2';
        }
        return "1";
    }
}