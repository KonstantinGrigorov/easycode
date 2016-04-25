<?php
require_once "itSchool.php";


class ItResources extends ItSchool
{
	
}


class Humans extends ItResources
{
		public $name;
		public $lastname;
		public $subject;

		public function __construct($name,$lastname,$subject)
	{
		$this->name=$name;
		$this->lastname=$lastname;
		$this->subject=$subject;
	}

		public function GoToLesson()
	{
		echo 'I go to lesson<br>';
	}

}


class Administration extends Humans
{

	public $post;

	public function __construct($post)
	{
		$this->post=$post;
	}
	
}

$admin = new Administration ('admin');
echo $admin->post;



final class Students extends Humans
{

}
$student1 = new Students ('Name', 'Lastname','php');
echo $student1->name;
echo $student1->GoToLesson(); 

class Teachers extends Humans
{

}







class Inhuman extends ItResources
{

}

class Gadgets extends Inhuman
{

}

class Workplaces extends Inhuman
{

}






	


