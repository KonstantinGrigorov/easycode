<?php

abstract class Worker (

	public $birthdate;
	public $department;
	public $position;
	public $fio;
	public $paymenttype;

	public function payment(){
			}
	)

class HourlyPayWorker extends Worker{
	public $hourRate;
	public $hoursCount;
	public function payment(){
		$pay = $hoursCount*$hourRate;
	}

}

class MonthlyPayWorker extends Worker{
	public $monthPay;
	public function payment() {
		return $monthPay;
	}
}





/* @var $this yii\web\View */
?>
