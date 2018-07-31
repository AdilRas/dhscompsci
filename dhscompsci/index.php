<!--
	Dulles High School Web Design Club 2018-2019
	Written By Adil Rasiyani, Vice President
	Using Bootstrap
-->

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body style="">
	<?php
		include 'nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-home').setAttribute('class', 'active nav-item');
	</script>

	<div class="container">

		<div class="row">
			<h1 class="display-3">Dulles Computer Science Club</h1>
		</div>
		<hr class="style14" />

		<!-- Logo and Mission -->
		<div class="row well border-0 border-secondary">
			<div class="col">
				<img src="img/logo.jpg" class="img-fluid" alt="Logo">
			</div>
			<div class="col">
				<h1 class="display-4">Our Mission</h1>
				<p class="lead">Our Mission is to bring the art of computer science to all of our members and inspire creative thinking and problem solving through the use of computers.</p>
				<a href="#" class="btn btn-primary">Get Started!</a>
			</div>
		</div>
		<hr/>

		<!--Slide Show and Welcome message -->
		<div class="row">
			<div class="col">
				<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vS1miMzu8WEe7AOjh1V9JZf3py38C24QPDW6wMw4hXiywd1Vfu-t-9X6P87bQxTqyvITus8VJusr1GU/embed?start=true&loop=true&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" style="padding-bottom: 20px;">
				</iframe>
			</div>
			<div class="col">
				<div class="row">
					<h4>Welcome to the Dulles Computer Science Club!</h4>
					<hr>
					<p class="lead">Official meetings are every <strong>Tuesday</strong> and <strong>Thursday</strong>, but you can come any day Ms. Coffman's in to catch up or get ahead.

					The meeting are always in <strong>Ms. Coffman's room (KLAB)</strong>.  This room is to the left of library.</p>
				</div>
			</div>
		</div>
		<hr class="style14">

		<!-- More Stuff -->
		<div class="row justify-content-center">
			<h2 class="text-uppercase">What We Do</h2>
		</div>
		<hr>

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