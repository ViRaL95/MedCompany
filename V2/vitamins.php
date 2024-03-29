<html ng-app="myModule2">
<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Shop For Medication </title>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css"  href="vex/dist/css/vex.css"/>
		<link rel="stylesheet" type="text/css" href="vex/dist/css/vex-theme-os.css"/>
</head>

	<body>
				<div class="container">
					<div class="navbar-header" style="background-color:#2a6cd6">
						<a class="navbar-brand" href="#">The Med Company</a>
					</div>

					<ul class="nav navbar-nav" style="background-color: #2a6cd6" role="navigation">		
						<li ><a href="homepage.php"> Home Page</a> </li>
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

			<div class="container" ng-controller="mycontroller2"  ng-cloak>
					<table class="table table-hover table-condensed">
						<thead>
							<tr>
								<th style="width:50%">Product</th>
								<th style="width:10%">Price</th>
								<th style="width:10%">Quantity</th>
								<th style="width:10%">Subtotal</th>
								<th style="width:20%"></th>
							</tr>
						</thead>
					<form id="vitamins-product-1" method="POST">	
						<tbody>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2">
											<img id="small-pic2" src="images/vitamind.jpg"></img>
										</div>
										<div class="col-sm-10">
											<h4 class="nomargin"><input type="hidden" name="name1" value="Vitamin D Supplements">
												Vitamin D Supplements
											</input>	
											</h4>
											<p>Vitamin D supplements are known for boosting the immune system, stopping development of rickets and an increase in energy</p>
										</div>	
									</div>
								</td>

								<td data-th="Price"><input type="hidden" name="Price1" value=01.99> 
									$1.99</input>
								</td>

								<td data-th="Quantity">
									<input type="number" id="amount1"  ng-model="subtotal.subtotal1" ng-change="changed()" ng-init="subtotal.subtotal1=0" name="Quantity1" id="amount1" class="form-control text-center" min="0"/>
								</td>

								<td data-th="Subtotal" id="subtotal-1" name="Subtotal" class="text-center" ng-bind="1.99*subtotal.subtotal1" ng-cloak></td>
								<td>
									<input type="hidden" name="step" value="1"></input>
									<button type="button" name="button-1" id="button1" class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>
					</form>	
					<form id="vitamins-product-2" method="POST">

							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2">
											<img src="images/omega-3.jpg" id="small-pic"></img>
										</div>
										<div class="col-sm-10">
											<h4>
											<input type="hidden" name="name2" value="Omega 3"></input>
												Omega 3
											</h4>
											<p>Omega 3 is known for boosting your memory, concentration and focus during your daily tasks!</p>
										</div>	
									</div>
								</td>

								<td data-th="Price">
								<input type="hidden" name="Price2" value="3.99"> 
									$3.99
								</input>	
								</td>

								<td data-th="Quantity">
									<input type="number" ng-model="subtotal.subtotal2" ng-change="changed2()" ng-init="subtotal.subtotal2=0" name="Quantity2" id="amount2" min="0" class="form-control text-center"></input>
								</td>

								<td data-th="Subtotal" id="subtotal-2" name="Subtotal"ng-bind="3.99*subtotal.subtotal2"  class="text-center"></td>

								<td>
								<input type="hidden" name="step" value="2"></input>
									<button type="button" name="button2" id="button2" class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>	
						</tbody>
					</form>	
				</table>
			</div>

		<script  type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>	
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/vitamins.js"></script>
		<script type="text/javascript" src="vex/dist/js/vex.combined.js"></script>
		<script type="text/javascript"> vex.defaultOptions.className = 'vex-theme-os'</script>
		<script type="text/javascript" src="js/signout.js"></script>

	</body>

</html>