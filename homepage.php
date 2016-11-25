<!DOCTYPE HTML>
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Bootstrap Tutorial </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
			<ul class="nav nav-tabs">
				<div class="container-fluid">
					<div class="navbar-header" style="background-color:#2a6cd6">
						<a class="navbar-brand" href="#">The Med Company</a>
					</div>

					<ul class="nav navbar-nav" style="background-color: #2a6cd6" role="navigation">		
						<li class="active"><a href="homepage.html"> Home Page</a> </li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase Something<span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="vitamins.html">Vitamins</a></li>
								<li><a href="supplements.html">Supplements</a></li>
								<li><a href="medication.html">Medication</a></li>
							</ul>
						</li>	
						<li><a href="aboutus.html">About Us</a></li>
						<li><a href="checkout.html">Contact</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right" style="background-color:#2a6cd6"role="navigation">
						  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
					</ul>
				</div>
			</ul>
		

		

		<script src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>