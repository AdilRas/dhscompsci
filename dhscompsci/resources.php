<!DOCTYPE html>
<!--
	Dulles High School Computer Science Club 2018-2019
	Written By Adil Rasiyani, President
	Using Bootstrap
-->


<html>
<head>
    <title>Resources</title>
    <?php 
    	include 'res/head.php';
     ?>
</head>
<body data-spy="scroll" data-target="#list-example">
	<?php
		include 'res/nav.php';
	?>
	<!--Set Active Page to 'active' in navbar (imported from nav.php)-->
	<script type="text/javascript">
		document.getElementById('nav-bar-resources').setAttribute('class', 'active nav-item');
	</script>

	<!-- Main Page -->
	<div class="container">
		<div class="row" id="resources-title-row">
			<h1 class="display-3">Resources</h1>
		</div>
		<hr class="style14">
		<div class="row" id="all-sections-container">
			<div class="col-md-4 d-none d-md-block">
				<div class="sticky-div" style="position:sticky; top:20px;">
					<div id="list-example" class="list-group">
					  <a class="list-group-item list-group-item-action" href="#list-item-1">Getting Started</a>
					  <a class="list-group-item list-group-item-action" href="#list-item-2">Java Materials</a>
					  <a class="list-group-item list-group-item-action" href="#list-item-3">Important Documents</a>
					  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-8" id="scrollspy-info">
				<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
					<h4 id="list-item-1" class="display-4">Getting Started</h4>
					  <p class="lead"><em>If you're new to the club, this section will be useful to you!</em></p>
					  <hr/>
					  <h3>What to Bring to Club</h3>
						  <p class="lead">
						  	<ul id="what-to-bring-list" class="list-group-flush">
						  		<li class="list-group-item lead">Travel permission slip (found below)</li>
								<li class="list-group-item lead">A flash drive to store materials</li>
								<li class="list-group-item lead">A laptop, if you'd prefer to use it. (Highly recommended)</li>
						  	</ul>
						  </p>
					  <h3>Contest Information</h3>
						  <p class="lead">
						  	<ul id=contest-info-main class="list-group-flush">
						  		<li class="list-group-item lead">Contest people should expect to arrive at Dulles around 6:30 am. We usually return before 3:00 pm.</li>
						  		<li class="list-group-item lead">
						  			You will need:
						  			<ul id="contest-info-list" class="list-group-flush">
								  		<li class="list-group-item-text">A laptop with an IDE (IntelliJ or Eclipse) and the JDK</li>
								  		<li class="list-group-item-text">Basic understanding of Java</li>
								  		<li class="list-group-item-text">A reference book. We have a few to choose from but feel free to bring your own.</li>
								  	</ul>
								</li>
								<li class="list-group-item lead">There are two parts to most computer science contests we participate in:
									<ul id="contest-info-2-list" class="list-group-flush lead">
										<li class="list-group-item">
											<p>
												1. Written - 40 Multiple Choice questions based on code analysis, principals of CS and nuances of the Java language.
											</p>
										</li>
										<li class="list-group-item">
											<p>2. Hands-On - Solving a packet of 12 or more problems using Java in a 2 hour time frame.</p>
											<ul class="list-group-flush">
												<li class="list-group-item-text">​​​​​​
													For practically any Java hands on problem, <a href="files/template.java" class="badge badge-success" download>this template</a> will serve as a basis for how to handle the problem. Memorize it or save it as a template in your IDE.
												</li>
											</ul>
										</li>
									</ul>
								</li>
						  	</ul>
						  </p>
					<h4 id="list-item-2" class="display-4">Java Materials</h4> 
					  	<p></p>
					  	<h3>Things needed to Code</h3>
						  	<p class="lead">
						  		<ul class="list-group-flush lead">
						  			<li class="list-group-item">
						  				1. <a href="http://www.oracle.com/technetwork/java/javase/downloads/index.html" class="badge badge-primary" target="_blank">
						  					Java Development Kit
						  				</a>
						  			</li>
						  			<li class="list-group-item lead"> 2. An Integrated Development Environment (IDE). We reccomend <a href="https://www.jetbrains.com/idea/download" class="badge badge-primary" target="_blank">IntelliJ</a>.</li>
						  		</ul>
						  		<p class="lead">If you need any help getting started, ask an <a href="officers.php" class="badge badge-secondary">Officer</a> during club.</p>
						  	</p>
					  	<h3>Learning Materials</h3>
						  	<p>
						  		<ul class="list-group-flush lead">
						  			<li class="list-group-item"><strong>Beginner</strong>: Use the expo materials provided in class or copy of Big Java which you can check out from Ms. Coffman.</li>
						  			<li class="list-group-item"><strong>Intermediate</strong>: Take <a href="" class="badge badge-primary">Algorithms, Part 1</a> and <a href="" class="badge badge-primary">Algorithms, Part 2</a> on Coursera.</li>
						  			<li class="list-group-item"><strong>Recommended Books</strong>:
						  				<ul class="list-group-flush">
						  					<li class="list-group-item-text">CLRS Introduction to Algorithms Third Edition</li>
						  					<li>Mitchell Waite and Robert Lafore's <em>Data Structures & Algorithms in Java</em></li>
						  				</ul>
						  			</li>
						  		</ul>
						  	</p>
				  	<h4 id="list-item-3" class="display-4">Important Documents</h4>
					  	<p class="lead">
					  		<ul class="list-group-flush lead">
					  			<em>The following documents are required to be turned in each school year if you wish to be a club memeber.</em>
					  			<li class="list-group-item">&#128462; <a href="files/transportation-form.pdf" class="badge badge-success" download>Transportation Form</a></li>
					  			<li class="list-group-item">&#128462; <a href="files/medical-form.pdf" class="badge badge-success" download>Medical Form</a></li>
					  		</ul>
					  		<ul></ul>
					  	</p>
				  	<h4 id="list-item-4" class="display-4">Item 4</h4>
				  	<p>...</p>
				</div>
			</div>
		</div>
		
	</div>

	<!-- Footer -->
	<?php 
		include 'res/footer.php';
	 ?>

	<!-- Scripts -->
	<script>
		
	</script>
	<!-- Bootstrap Scripts -->
	<?php 
		include 'res/cdn.php';
	 ?>
</body>
</html>