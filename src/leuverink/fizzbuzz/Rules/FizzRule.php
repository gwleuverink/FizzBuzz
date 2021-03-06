<?php

namespace Leuverink\Fizzbuzz\Rules;

/**
 * Class FizzRule.
 */
class FizzRule
{
    /**
     * @param $number
     *
     * @return bool
     */
    public function matches($number)
    {
        return $number % 3 === 0;
    }

    /**
     * @return string
     */
    public function getReplacement()
    {
        return 'Fizz';
    }
}
