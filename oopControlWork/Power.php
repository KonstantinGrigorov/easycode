<?php


class Power {
    static public $inputNumber;
    
    public function __construct($yourNumber=2){
        Power::$inputNumber = $yourNumber;
    }
    
     public function getNumber() {
        return Power::$inputNumber.'<br>';
    }
        
    public function inputNewNumber (){
        return Power::$inputNumber = $this->getNumber();
    }
    
    public function double_degree(){
        return ($this->inputNewNumber())*($this->inputNewNumber()).'<br>';
    }
    
    public function triple_degree(){
        return ($this->inputNewNumber())*($this->inputNewNumber())*
        ($this->inputNewNumber()).'<br>';
    }
    
    public function quadruple_degree(){
        return 'The fourth degree of this number is '.($this->inputNewNumber())
                *($this->inputNewNumber())*($this->inputNewNumber())
         *($this->inputNewNumber()).'<br>';
    }
    
    public function fivefold_degree(){
        return ($this->inputNewNumber())*($this->inputNewNumber())*
        ($this->inputNewNumber())*($this->inputNewNumber())*
        ($this->inputNewNumber()).'<br>';
    }    
    
}

$somenumber = new Power();
//echo Power::$inputNumber;
echo $somenumber->getNumber();
echo $somenumber ->inputNewNumber();
echo $somenumber -> double_degree();
echo $somenumber ->triple_degree();
echo $somenumber ->quadruple_degree();
echo $somenumber ->fivefold_degree();