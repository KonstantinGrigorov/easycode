<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 10:05 PM
 */

namespace app\models;


class Rectangle extends AbstractComponent
{
    public function render()
    {
        $result = '<div style="';
        $result .= 'background-color: RGB(' . $this->color->red . ',';
        $result .= $this->color->green . ',';
        $result .= $this->color->blue . ');';
        $result .= 'height: ' . $this->height . 'px;';
        $result .= 'width: ' . $this->width . 'px;';
        $result .= '"></div>';

        return $result;
    }
}