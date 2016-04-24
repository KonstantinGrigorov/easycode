<?php
require_once "house.php";
require_once 'woman.php';
require_once 'man.php';

class City {
	protected $name;
	public $housePull = array();
	public $citziens = [];

	public function __construct($name) {
        $this->_name = $name;
	}

	public function buildHouse(House $objHouse) {
        $objHouse->setCity($this);
        $this->_addHouseToPull($objHouse);
	}

    protected function _addHouseToPull(House $objHouse) {
    	$this->housePull[$objHouse->getName()] = $objHouse;
    }

    public function destroyHouse($name) {
    	unset($this->housePull[$name]);
    }

    public function getAllHouses() {
    	return $this->housePull;
    }

    public function addCitzien(Human $citzien) {
        $this->citziens[$citzien->getId()] = $citzien;
    }

    public function getCitziensCount() {
        return count($this->citziens);
    }

    public function getCitzienById($id) {
        return isset($this->citziens[$id])
            ? $this->citziens[$id]
            : false;
    }

    public function getName() {
        return $this->_name;
    }
}
$city = new City('Kharkiv');
$house = new House('house #1');
$city->buildHouse($house);

$man = new Man(1, 'Alexander', 18);
$woman = new Woman(2, 'Olga', 19);

//$city->addCitzien($man);
$city->addCitzien($woman);

$house->setOwner($woman);
$man->live($house);
