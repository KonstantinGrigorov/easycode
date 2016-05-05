<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 9:59 PM
 */

namespace app\models;


abstract class AbstractComponent
{
    public $color;
    public $width;
    public $height;

    public function __construct(Color $color, $height, $width) {
        $this->color  = $color;
        $this->height = $height;
        $this->width  = $width;
    }

    abstract public function render();
}