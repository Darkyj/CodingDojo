<?php 
	require('oopintermediateconnection.php');
	
	class Process extends Database
	{

		var $countryname;
		var $cont;
		var $region;
		var $population;
		var $lifeexpect;
		var $govform;

		var $country = "SELECT Country,Continent,Region,Population,LifeExpectancy,GovernmentForm FROM Country";

		if(isset($_POST['name'])) 
		{
			return var $grabbing = fetch_record($country);	
		}

		fucntion __construct()
		{
			$this->countryname = $grabbing['Country'];
			$this->cont = $grabbing['Continent'];
			$this->region = $grabbing['Region'];
			$this->population = $grabbing['Population'];
			$this->lifeexpect = $grabbing['LifeExpectancy'];
			$this->govform = $grabbing['GovernmentForm'];
		}

	}












 ?>