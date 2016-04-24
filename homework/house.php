<?php

class House {
    const AGE_OWNER_RESTRICTION = 18;

    public $height;
    public $name;
    public $citziens = [];

    protected $_citzienRestiction = 5;
    protected $_owner; // human object
    /**
     * @var City
     */
    protected $_city; // city object

    public function __construct($name='Default name', $height=10) {
        $this->name = $name;
        $this->height = $height;
    }

    public function addCitzien(Human $citzien) {
        if (!$this->getCity()->getCitzienById($citzien->getId())) {
            return false;
        }

        if ($this->getCitzienCount() >= $this->_citzienRestiction) {
            return false;
        }

        $this->citziens[$citzien->getId()] = $citzien;
        return true;
    }

    public function getCitzienCount() {
        return count($this->citziens);
    }

    public function setOwner(Human $human) {
        if ($human->getAge() < self::AGE_OWNER_RESTRICTION) {
            // TODO: add exception
        } else {
            $this->_owner = $human;
        }
    }

    public function getOwner() {
        return $this->_owner;
    }

    public function getName() {
        return $this->name;
    }

    public function setCity(City $city) {
        $this->_city = $city;
    }

    public function getCity() {
        return $this->_city;
    }
}