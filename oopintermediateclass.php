<?php 
	
	class Process
	{

		private $countryname;
		private $cont;
		private $region;
		private $population;
		private $lifeexpect;
		private $govform;

		function __construct($countryname,$cont,$region,$population,$lifeexpect,$govform)
		{
			$this->countryname = $countryname;
			$this->cont = $cont;
			$this->region = $region;
			$this->population = $population;
			$this->lifeexpect = $lifeexpect;
			$this->govform = $govform;
		}

		function get_country()
		{
			return $this->countryname;
		}

		function get_continent()
		{
			return $this->cont;
		}

		function get_region()
		{
			return $this->region;
		}

		function get_population()
		{
			return $this->population;
		}

		function get_lifeexpect()
		{
			return $this->lifeexpect;
		}

		function get_gov()
		{
			return $this->govform;
		}

	}










 ?>