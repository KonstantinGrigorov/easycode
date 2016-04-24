<?php

abstract class Human
{
    protected $_age;
    protected $_name;
    protected $_id;

    public function __construct($id, $name, $age) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_age = $age;
    }

    public function getId() {
        return $this->_id;
    }

    public function getAge() {
        return $this->_age;
    }

    public function getName() {
        return $this->_name;
    }

    public function live(House $house) {
        if ($house->addCitzien($this)) {
            echo $this->getName() . ' is living now in ' .
                $house->getName();
        } else {
            echo $this->getName() . ' is not living in city ' .
                $house->getCity()->getName();
        }
    }
}