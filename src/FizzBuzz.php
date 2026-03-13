<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function handler(int $number):string
    {
        if(($number % 3 === 0) and ($number % 5 === 0))
        {
            return "FizzBuzz";
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