<?php 
	require('oopintermediateconnection.php');
	$selecting = "SELECT name FROM Country";
	$info = new Database();
	$info2->fetch_all($info);

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IntermediateII OOP</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">




	</script>
</head>
<body>
	<div>
		<h4>Select Country</h4>
		<form action="oopintermediateprocess.php" method="post">
			<select name="name" id="selecting">
			<?php 
				foreach ($info as $value) 
				{
					echo "<option value='{$value['name']}'>{$value['name']}</option>";
				}
			 ?>
			 </select>
			 <button>Check Info</button>
		</form>
	</div>
	<div>
		<h2>Country Information</h2>
		<?php 
			$information = new Process;
			echo $information;
		 ?>
	</div>
</body>
</html>