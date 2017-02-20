<?php

namespace Leuverink\Fizzbuzz;


/**
 * Class FizzBuzz
 * @package Leuverink\Fizzbuzz
 */
class FizzBuzz
{

    /**
     * @param $limit
     * @return array
     */
    public static function generateList($limit)
    {
        $list = [];

        for ($number = 1; $number <= $limit; $number++) {
            $list[] = self::generateElement($number);
        }

        return $list;
    }

    /**
     * @param $number
     * @return string
     */
    public static function generateElement($number)
    {
        if($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return $number;
    }
}