<!--
	Dulles High School Web Design Club 2018-2019
	Written By Adil Rasiyani, Vice President
	Using Bootstrap
-->

<!DOCTYPE html>
<html style="height:100%;">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="height:100%;">
	<?php
		include 'nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-officers').setAttribute('class', 'active nav-item');
	</script>

	<!-- Main Page -->
	<div class="container" style="height:100%;">
		<h1 class="display-3">Officers</h1>
	</div>

	<!-- Footer -->
	<?php 
		include 'footer.php';
	 ?>

	<!-- Scripts -->
	
	<!-- Bootstrap Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>