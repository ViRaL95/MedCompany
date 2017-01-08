 <!DOCTYPE HTML>
	<head>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Home Page </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="vex/dist/js/vex.combined.js"></script>
		<script type="text/javascript"> vex.defaultOptions.className = 'vex-theme-os'</script>
		<link rel="stylesheet" type="text/css"  href="vex/dist/css/vex.css"></link>
		<link rel="stylesheet" type="text/css" href="vex/dist/css/vex-theme-os.css"></link>		
		<ul class="nav nav-tabs">
				<div class="container-fluid">
					<div class="navbar-header" style="background-color:#2a6cd6">
						<a class="navbar-brand" href="#">The Med Company</a>
					</div>

					<ul class="nav navbar-nav" style="background-color: #2a6cd6" role="navigation">		
						<li class="active"><a href="homepage.php"> Home Page</a> </li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase Something<span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="vitamins.php">Vitamins</a></li>
								
								<li><a href="medication.php">Medication</a></li>
							</ul>
						</li>	
						<li><a href="aboutus.php">About Us</a></li>
						
					</ul>

					<ul class="nav navbar-nav navbar-right" style="background-color:#2a6cd6"role="navigation">
						 <li><a href="./checkout.php" id="check-out"><span class="glyphicon glyphicon-shopping-cart"></span>Check Out</a></li>
						  <li><a href="#" id="sign-out"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
					</ul>
				</div>
			</ul>
	</head>

			
	<body id="home-body">	

		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/signout.js"></script>
	</body>
</html>