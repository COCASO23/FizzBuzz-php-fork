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
    public function givenNumberOneReturnsNumberOne()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(1);

        $this->assertEquals("1", $result);
    }
    /**
     * @test
     */
    public function givenNumberTwoReturnsNumberTwo()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(2);

        $this->assertEquals("2", $result);
    }
    /**
     * @test
     */
    public function givenNumberThreeReturnsNumberThree()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(3);

        $this->assertEquals("3", $result);
    }
}









