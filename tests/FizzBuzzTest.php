<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function givenANumberReturnsNumberThatNumber()
    {
        $FizzBuzz = new FizzBuzz();
        $number = 1;

        $result = $FizzBuzz->handler($number);

        $this->assertEquals($number, $result);
    }
    /**
     * @test
     */
    public function givenNumberThreeReturnsFizz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(3);

        $this->assertEquals("Fizz", $result);
    }
    /**
     * @test
     */
    public function givenNumberSixReturnsFizz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(6);

        $this->assertEquals("Fizz", $result);
    }
    
}









