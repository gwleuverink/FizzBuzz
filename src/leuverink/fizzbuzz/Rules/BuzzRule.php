<?php

namespace Leuverink\Fizzbuzz\Rules;

/**
 * Class BuzzRule.
 */
class BuzzRule
{
    /**
     * @param $number
     *
     * @return bool
     */
    public function matches($number)
    {
        return $number % 5 === 0;
    }

    /**
     * @return string
     */
    public function getReplacement()
    {
        return 'Buzz';
    }
}
