<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 9:53 PM
 */

namespace app\models;


class Summator extends Power
{
    public function sum($a, $b, $power) {
        return $this->multiply($a, $power) + $this->multiply($b, $power);
    }

    public function sum2($a, $b) {
        return $this->sum($a, $b, 2);
    }

    public function sum3($a, $b) {
        return $this->sum($a, $b, 3);
    }
}