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

class Dragon extends Animal 
{
	function fly()
	{
		$this->health = $this->health - '10'.' health';
	}
}

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

echo "<h1>Dragon</h1>";
$dragon = new Dragon('Dragon',170);
echo $dragon->walk();
echo $br;
echo $dragon->walk();
echo $br;
echo $dragon->walk();
echo $br;
echo $dragon->run();
echo $br;
echo $dragon->run();
echo $br;
echo $dragon->fly();
echo $br;
echo $dragon->fly();
echo "This is a dragon! ".$dragon->displayHealth();



 ?>