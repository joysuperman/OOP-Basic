<?php

/**
 * Parent Class Property Access From Child Class Property 
 */
class ParentClass
{
	protected $name;

	function __construct($name)
	{	
		$this-> name = $name;
		$this->sayHi();
	}

	public function sayHi(){
		echo "<h1>{$this->name} says HI </h1>";
	}
}

/**
 * Child Class
 */
class ChildClass extends ParentClass
{
	public function sayHi(){
		Parent::sayHi();
		echo "<h1>Say Hello</h1>";
	}
}

$class = new ChildClass("JOY");