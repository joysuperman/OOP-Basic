<?php

/**
 * Inharitance
 * Parent Class
 */
class Animal
{
	protected $name;

	function __construct($name)
	{
		$this-> name = $name;
	}

	public function eat(){
		echo "<h1> {$this->name} is Eating</h1>";
	}

	public function run(){
		echo "<h1> {$this->name} is Running</h1>";
	}

	public function say(){}

	protected function addTitle($title){
		$this->name = $title." ".$this->name;
	}
}
/**
 * Child Class
 */
class Human extends Animal
{
	public function say(){
		$this->addTitle("Mr.");
		echo "<h1>{$this->name} says HI </h1>";
	}
}
/**
 * Child Class
 */
class Cat extends Animal
{
	public function say(){
		echo "<h1> {$this->name} says Maw</h1>";
	}
}
/**
 * Child Class
 */
class Dog extends Animal
{
	public function say(){
		echo "<h1> {$this->name} says Ghaw</h1>";
	}
}

$human = new Human("Thanvir");
$human->say();
$human->run();

$cat = new Cat("Cat Tom");
$cat->say();
$cat->run();

$dog = new Dog("Dog Harry");
$dog->say();
$dog->run();