<?php

class Power {
    //public $inputNumber;
    
    //public function __construct($number){
    //    $this->inputNumber = $number;
    //}
    
    public function double_degree($number){
        return $number*$number.'<br>';
    }
    
    public function triple_degree($number){
        return $result = $number*$number*$number.'<br>';
    }
    
    public function quadruple_degree($number){
        return 'The fourth degree of this number is '.$result = $number*$number*$number*$number.'<br>';
    }
    
    public function fivefold_degree($number){
        return $result = $number*$number*$number*$number*$number.'<br>';
    }    
    
}

$number1 = new Power;
echo $number1 -> double_degree(2);
echo $number1 ->triple_degree(4);
echo $number1 ->quadruple_degree(1);
echo $number1 ->fivefold_degree(3);