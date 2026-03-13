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
    public function givenNumberDivisibleByThreeReturnsFizz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(3);

        $this->assertEquals("Fizz", $result);
    }
    /**
     * @test
     */
    public function givenNumberDivisibleByFiveReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(5);

        $this->assertEquals("Buzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberFifteenReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(15);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberThirtyReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(30);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberFortyFiveReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(45);

        $this->assertEquals("FizzBuzz", $result);
    }
}









