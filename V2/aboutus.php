<!DOCTYPE HTML>
<html>
	<head>
		<title> About Us </title>
				<meta charset="UTF-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
				<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css">
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<script type="text/javascript" src="vex/dist/js/vex.combined.js"></script>
				<script type="text/javascript"> vex.defaultOptions.className = 'vex-theme-os'</script>
				<link rel="stylesheet" type="text/css"  href="vex/dist/css/vex.css"></link>
				<link rel="stylesheet" type="text/css" href="vex/dist/css/vex-theme-os.css"></link>		
	</head>
	<body>
			<nav class="nav nav-tabs">
				<div class="container">
					<div class="navbar-header" style="background-color:#2a6cd6">
						<a class="navbar-brand" href="#">The Med Company</a>
					</div>
					<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav" style="background-color: #2a6cd6" role="navigation">		
						<li ><a href="homepage.php"> Home Page</a> </li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase Something<span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="vitamins.php">Vitamins</a></li>
								<li><a href="medication.php">Medication</a></li>
							</ul>
						</li>	
						<li class="active"><a href="aboutus.php">About Us</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right" style="background-color:#2a6cd6"role="navigation">
						<li><a href="checkout.php" id="check-out"><span class="glyphicon glyphicon-shopping-cart"></span>Check Out</a></li>
						  <li><a href="#" id="sign-out"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
					</ul>
				</div>
			</nav>
			
		<div id="theCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#theCarousel" data-slide-to="0" class="active"></li>
				<li data-tagrget="#theCarousel" data-slide-to="1" ></li>
				<li data-target="#theCarousel" data-slide-to="2" ></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<div class="slide1" class="active"></div>
					<div class="carousel-caption">
						<h1>The Medical Company</h1>
							<p>	All FDA Approved Medication. Sent Straight to Your Nearest Pharmacy!</p>
						  	<p>A Vi_ral Production</p>


					</div>		
				</div>	

				<div class="item">
					<div class="slide2"></div>
					<div class="carousel-caption">
						<h1>Can Deliver Full Scale Web Applications. </h1>
							<p> Using Skills in HTML, CSS, PHP, Javascript, Jquery, Bootstrap, Angular.js, and Python</p>
					</div>
				</div>

				<div class="item">
					<div class="slide3"></div>	
					<div class="carousel-caption">
						<h1> Looking For an Internship as a Developer For Summer 2017 </h1>
					</div>	
				</div>
			</div>
			
			<a class="left carousel-control" href="#theCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#theCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>	si
			</a>	
		</div>

		
		<script type="text/javascript" src= "http://code.jquery.com/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>		
		<script type="text/javascript" src="js/signout.js"></script>
	</body>
</html>		
