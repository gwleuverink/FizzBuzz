<?php


namespace Leuverink\Fizzbuzz\Rules;


/**
 * Class FizzBuzzRule
 * @package leuverink\fizzbuzz
 */
class FizzBuzzRule
{

    /**
     * @param $number
     * @return bool
     */
    public function matches($number) {
        return $number % 3 === 0 && $number % 5 === 0;
    }

    /**
     * @return string
     */
    public function getReplacement() {
        return 'fizzbuzz';
    }

}