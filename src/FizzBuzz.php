<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    function handler(int $number):string
    {
        if($number % 3 === 0)
        {
            return "Fizz";
        }
        return $number;
    }
}