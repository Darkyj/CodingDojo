<?php 

class HTML_Helper
{
	var $first_name;
	var $last_name;
	var $nick_name;

	function __construct($first_name,$last_name,$nick_name)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->nick_name = $nick_name;
	}

	function print_table($array)
	{
		$array = array();
		$html = "";
		foreach ($array as $key=> $value) 
		{
			$html .= "<table>";
			foreach ($value as $k => $val) 
			{
				$html .= "<tr>
							<td>{$val}</td>
						 </tr>";
			}
			$html .= "</table>";
		}
	}

	function print_select()
	{

	}
}














 ?>