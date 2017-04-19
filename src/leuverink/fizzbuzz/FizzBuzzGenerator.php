<?php

namespace Leuverink\Fizzbuzz;

use Leuverink\Fizzbuzz\Rules\FizzBuzzRule;
use Leuverink\Fizzbuzz\Rules\FizzRule;
use Leuverink\Fizzbuzz\Rules\BuzzRule;
/**
 * Class FizzbuzzGenerator
 * @package leuverink\fizzbuzz
 */
class FizzBuzzGenerator
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

        $fizzBuzzRule = new FizzBuzzRule();
        if($fizzBuzzRule->matches($number)) {
            return $fizzBuzzRule->getReplacement();
        }

        $fizzRule = new FizzRule();
        if($fizzRule->matches($number)) {
            return $fizzRule->getReplacement();
        }

        $buzzRule = new BuzzRule();
        if($buzzRule->matches($number)) {
            return $buzzRule->getReplacement();
        }

        return $number;
    }
}