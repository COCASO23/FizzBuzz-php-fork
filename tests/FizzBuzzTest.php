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
}









