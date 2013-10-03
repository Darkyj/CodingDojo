<?php 
	require('oopintermediateconnection.php');
	require('oopintermediateclass.php');
	

	function list_countries()
	{
		$query = "SELECT name FROM Country";
		$count = fetch_all($query);
		$drop = "<select>";
		foreach ($count as $val) 
		{
			$drop .= "<option value='{$val['name']}'>{$val['name']}</option>";
		}
		$drop .= "</select>";
		return $drop;
	}

	if(isset($_POST['country'])) 
	{
		$queries = "SELECT Name,Continent,Region,Population,LifeExpectancy, GovernmentForm FROM Country WHERE Name = '{$_POST['country']}'";
		$grab = fetch_record($queries);
		$country = new Process($grab['Name'],$grab['Continent'],$grab['Region'],$grab['Population'],$grab['LifeExpectancy'],$grab['GovernmentForm']);
		$table ="
				<p>Country:". $country->get_country()."</p>
				<p>Continent:". $country->get_continent()."</p>
				<p>Region:". $country->get_region()."</p>
				<p>Population:" .number_format($country->get_population())."</p>
				<p>Life Expectancy:" .$country->get_lifeexpect()."</p>
				<p>Government Form:". $country->get_gov()."</p>";
		echo json_encode($table);
	}










 ?>