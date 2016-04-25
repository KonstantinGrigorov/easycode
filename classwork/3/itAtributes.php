<?php

require_once "itSchool.php";

class ItAtributes extends ItSchool
{
	public $name ='HardCode';
	public $email ='some_email';
	public $phoneNumber ='some_number';
	public $adress = [];
	public $registrationId;
}




$newSchool = new ItAtributes;
echo $newSchool->name;