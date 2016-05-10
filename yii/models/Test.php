<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 10:33 PM
 */

namespace app\models;


class Test
{
    public $data = [];

    public function __get($key) {
        return $this->data[$key];
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }
}