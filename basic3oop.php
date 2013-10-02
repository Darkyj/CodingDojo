<?php 

class HTML_Helper
{

	function print_table($array)
	{
		
		$html = "";
		
		foreach($array as $value) 
		{
			$html .= "<table border='1px'>";
			foreach ($value as $key => $val) 
			{
				$html .= "<tr>
							<td>".$key."</td><td>".$val."</td>
						 </tr>";
			}
			$html .= "</table>";	
		}
		
		return $html;
	}

	function print_select($name,$array)
	{
		$html = "";
		$html .="<select name='{$name}'>";
		foreach ($array as $value) 
		{
			$html .="<option value='{$value}'>{$value}</option>";
		}
		$html .="</select>";
		return $html;
	}
}




$new = new HTML_Helper();

$array = array(array('First Name'=>'Josue', 'Last Name' =>'Rojas','Nick Name'=>'Jdawg'),array('First Name' => 'Jama','Last Name' => 'Rojas','Nick Name' =>'chousama'));
echo $new->print_table($array);

$states1 = new HTML_Helper();
$states2 = array('CA','TX','NY','FL','WA');
echo $states1->print_select('states',$states2);














 ?>