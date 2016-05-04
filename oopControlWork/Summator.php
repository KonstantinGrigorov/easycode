<?php
require_once 'Power.php';

class Summator extends Power {
      
    public function __construct($yourNumber=2){
        parent::$inputNumber = $yourNumber;
    }
    
        
    public function sum() {
        return parent::$inputNumber+parent::$inputNumber.'<br>';
    }
    
    public function sum_double_degree(){
        return parent::double_degree()+parent::double_degree().'<br>';
    }
    
    public function sum_triple_degree(){
        return parent::triple_degree()+parent::triple_degree().'<br>';
        
    }
    
    public function sum_quadruple_degree(){
        return parent::quadruple_degree()+parent::quadruple_degree().'<br>';
    }
    
    public function sum_fivefold_degree(){
        return parent::fivefold_degree()+parent::fivefold_degree().'<br>';
    }
}

$somenumber2 = new Summator();
echo $somenumber2->sum();
echo $somenumber2->sum_double_degree();
echo $somenumber2->sum_triple_degree();
echo $somenumber2->sum_quadruple_degree();
echo $somenumber2->sum_fivefold_degree();