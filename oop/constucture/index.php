
<?php 
/**
 * construct
 */
class Human
{
	public $name;
	public $age;

	function __construct($name,$age)
	{
		$this-> name = $name;
		$this-> age = $age;
	}

	function sayName()
	{
		echo "<h1>my name is {$this->name}</h1>";
	}

	function sayAge()
	{
       echo "<h1>{$this->name} you are {$this->age} years old!</h1>";
	}
}
     
$h1 = new Human("Joy","25");
$h1->sayName();
$h1->sayAge();

$h2 = new Human("Argho","25");
$h2->sayAge();