<?php 
	require('oopintermediateprocess.php');
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IntermediateII OOP</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('select').on('change', function()
			{
				var value = $(this).val();
				$('#hidden').val(value);
					$.post(
						$('#form').attr('action'),
						$('#form').serialize(),
						function(data)
						{
							$('#target').html(data);
						}, 'json');
			});
			$.post($('#form').attr('action'),
				$('#form').serialize(),
				function(data)
			{
				$('#target').html(data);
			},'json');
		});



	</script>
</head>
<body>
	<div>
		<?php 
				echo list_countries();
		?>
		<h4>Select Country</h4>
		<form id='form' action="oopintermediateprocess.php" method="post">
			<input id='hidden' type="hidden" name="country" value='Aruba'>		
		</form>
	</div>
		<h2>Country Information</h2>
	<div id='target'>
		
	</div>
</body>
</html>