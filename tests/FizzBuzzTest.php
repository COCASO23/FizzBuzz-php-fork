<?php

namespace Deg540\CleanCodeKata9\Test;

class FizzBuzzTest
{
    /**
     * @test
     */
    public function getHelloWorld()
    {
        $FizzBuzz = new FizzBuzz();

        $result = $FizzBuzz->handler(1);

        $this->assertEquals("Hello, World!", $result);
    }
}