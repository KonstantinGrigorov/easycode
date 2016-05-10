<?php
/**
 * Created by PhpStorm.
 * User: bogdan
 * Date: 5/5/16
 * Time: 9:03 PM
 */

namespace app\models;


class TestOne
{
     public $request;
     public $get;
     public $post;

     public function __construct($request, $get, $post) {
         $this->request = $this->_validate($request);
         $this->get     = $this->_validate($get);
         $this->post    = $this->_validate($post);
     }

    protected function _trimData($value) {
        return trim($value);
    }

    protected function _validate(array $data) {
        foreach ($data as $key => $value) {
            $data[$key] = $this->_trimData($value);

        }

        return $data;
    }
}