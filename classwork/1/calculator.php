<?php

require_once 'iCalculator.php';

class Calculator implements iCalculator
{

}

$calculator = new Calculator();
$calculator->plus(1, 2); // 3