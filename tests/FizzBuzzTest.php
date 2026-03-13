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
    public function givenANumberReturnsThatNumber()
    {
        $FizzBuzz = new FizzBuzz();
        $number = 1;

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz($number);

        $this->assertEquals($number, $result);
    }
    /**
     * @test
     */
    public function givenNumberDivisibleByThreeReturnsFizz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(3);

        $this->assertEquals("Fizz", $result);
    }
    /**
     * @test
     */
    public function givenNumberDivisibleByFiveReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(5);

        $this->assertEquals("Buzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberDivisibleByThreeAndFiveReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(15);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberWithA3ReturnsFizz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(13);

        $this->assertEquals("Fizz", $result);
    }
    /**
     * @test
     */
    public function givenNumberWithA5ReturnsBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(52);

        $this->assertEquals("Buzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberFiftyThreeReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(53);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberThirtyFiveReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(35);

        $this->assertEquals("FizzBuzz", $result);
    }
    /**
     * @test
     */
    public function givenNumberOneHundredAndFiftyThreeReturnsFizzBuzz()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->calculateIfNumberIsNumberIsFizzIsBuzzOrIsFizzBuzz(153);

        $this->assertEquals("FizzBuzz", $result);
    }
}









