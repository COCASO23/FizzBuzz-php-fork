<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function handler(int $number):string
    {
        if ($number === 2)
        {
            return '2';
        }
        return "1";
    }
}