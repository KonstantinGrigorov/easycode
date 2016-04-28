<?php
namespace kharkiv;

require_once 'city/city.php';
require_once 'house.php';
require_once 'man.php';
require_once 'woman.php';

use kharkiv\city;

$city = new City('Kharkiv');
$house = new House('house #1');
$city->buildHouse($house);

$man = new Man(1, 'Alexander', 18);
$woman = new Woman(2, 'Olga', 19);

$city->addCitzien($man);
$city->addCitzien($woman);

$house->setOwner($woman);
$woman->live($house);
$man->live($house);