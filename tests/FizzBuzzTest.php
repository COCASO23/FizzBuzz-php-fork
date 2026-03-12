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
    public function givenNumber5ReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(5);

        $this->assertEquals("Buzz", $result);
    }
    /**
     * @test
     */
    public function givenNumber10ReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(10);

        $this->assertEquals("Buzz", $result);
    }
    /**
     * @test
     */
    public function givenNumber20ReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(20);

        $this->assertEquals("Buzz", $result);
    }

}









