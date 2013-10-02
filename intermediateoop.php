<?php 

class Animal
{
	var $health;
	var $name;

	function __construct($name,$health)
	{
		$this->name = $name;
		$this->health = $health;
	}


	function walk()
	{
		return $this->health = $this->health - '1'." health";
	}

	function run()
	{
		return $this->health = $this->health - '5'.' health';
	}

	function displayHealth()
	{
		return $this->name." ".$this->health;
	}

}

class Dog extends Animal
{
	
	function pet()
	{
		return $this->health = $this->health + '5'.' health';
	}
}

// class Dragon extends Animal 
// {
// 	var $health = 170;
// }

$br = "<br>";
$animal = new Animal('Zebra',100);
echo "<h1>Animal Class</h1>";
echo $animal->walk();
echo $br;
echo $animal->walk();
echo $br;
echo $animal->walk();
echo $br;
echo $animal->run();
echo $br;
echo $animal->run();
echo $br;
echo $animal->displayHealth();



echo "<h1>Dog</h1>";

$dog = new Dog('Shephard',150);
echo $dog->walk();
echo $br;
echo $dog->walk();
echo $br;
echo $dog->walk();
echo $br;
echo $dog->run();
echo $br;
echo $dog->run();
echo $br;
echo $dog->pet();
echo $br;
echo $dog->displayHealth();






 ?>