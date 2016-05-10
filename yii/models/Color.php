<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 10:00 PM
 */

namespace app\models;


class Color
{
    public $red;
    public $green;
    public $blue;

    public function __construct($red, $green, $blue) {
        $this->red   = $red;
        $this->green = $green;
        $this->blue  = $blue;
    }
}