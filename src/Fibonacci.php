<?php
namespace MKretz\Algorithm;

final class Fibonacci
{
    /**
     * Compute the Fibonacci sequence for a given number n.
     *
     * @param integer $n
     * @return \Generator
     */
    public static function compute(int $n) : \Generator
    {
        $previous = 0;
        $current = 1;

        yield 0;

        for ($i = 0; $i < $n; $i++) {
            yield $current;

            $temp = $current + $previous;
            $previous = $current;
            $current = $temp;
        }
    }
}