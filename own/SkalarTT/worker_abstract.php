<?php

abstract class Worker {

	public $birthdate;
	public $department;
	public $position;
	public $fio;
	public $paymenttype;
	//public $hoursCount;
	//public $hourRate;

	public function __construct($birthdate, $department, $position, $fio, $paymenttype) {
      $this->birthdate = $birthdate;
      $this->department = $department;
      $this->position = $position;
      $this->fio = $fio;
      $this->paymenttype = $paymenttype;
    }

    public function payment(){
    	
    }
	
    	
	}

	/**/



/* @var $this yii\web\View */
?>
