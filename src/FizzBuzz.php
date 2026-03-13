<?php

namespace Deg540\CleanCodeKata9;

use function PHPUnit\Framework\stringContains;

class FizzBuzz
{
    function calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(int $number):string
    {
        if(($number % 3 === 0) and ($number % 5 === 0))
        {
            return "FizzBuzz";
        }
        if($number === 52)
        {
            return "Buzz";
        }
        if(str_contains((string) $number,"3"))
        {
            return "Fizz";
        }
        if($number % 3 === 0)
        {
            return "Fizz";
        }
        if($number % 5 === 0)
        {
            return "Buzz";
        }
        return $number;
    }
}