<?php

use PHPUnit\Framework\TestCase;
use MKretz\Algorithm\Fibonacci;

final class FibonacciTest extends TestCase
{
    public function testComputeForPositives00() : void
    {
        $expectedValues = [0, 1, 1, 2, 3, 5];
        $actualValues = Fibonacci::compute(5);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }

    public function testComputeForPositives01() : void
    {
        $expectedValues = [0, 1, 1, 2, 3, 5, 8, 13, 21];
        $actualValues = Fibonacci::compute(8);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }

    public function testComputeForPositives02() : void
    {
        $expectedValues = [0, 1, 1];
        $actualValues = Fibonacci::compute(2);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }

    public function testComputeForZero() : void
    {
        $expectedValues = [0];
        $actualValues = Fibonacci::compute(0);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }

    public function testComputeForNegatives00() : void
    {
        $expectedValues = [0];
        $actualValues = Fibonacci::compute(-1);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }

    public function testComputeForNegatives01() : void
    {
        $expectedValues = [0];
        $actualValues = Fibonacci::compute(-5);

        foreach ($actualValues as $i => $actualValue) {
            $this->assertEquals($expectedValues[$i], $actualValue);
        }
    }
}