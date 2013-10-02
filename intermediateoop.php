<?php 

class Animal
{
	var $health;

	function __construct($name)
	{
		$this->$name = $name;
		$this->health = 100;
	}


	function walk()
	{
		return $this->health = $this->health - '1'." health";
	}

	function run()
	{
		return $this->heath = $this->health - '5'.' health';
	}

	function displayHealth()
	{
		return $this->name." ".$this->health;
	}

}

$zebra = new Animal('Zebra');

echo $zebra->walk();









 ?>