<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 9:23 PM
 */

namespace app\models;


class Power
{
    public function multiply($number, $power) {
        $result = 0;

        for ($i = 1; $i < $power; $i++) {
            $result += $number * $number;
        }

        return $result;
    }

    public function toPowerTwo($number) {
        return $this->multiply($number, 2);
    }

    public function toPowerThree($number) {
        return $this->multiply($number, 3);
    }
}