<?php
include_once'./php/redirect.php';
?>
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
						<li><a href="aboutus.html">About Us</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right" style="background-color:#2a6cd6"role="navigation">
					<li><a href="./checkout.php" id="check-out"><span class="glyphicon glyphicon-shopping-cart"></span>Check Out</a></li>
						  <li><a href="#" id="sign-out"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
					</ul>
				</div>
			</ul>
		

			<div class="container">
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
					<form id="medication-product-1" method="POST">	
						<tbody>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2">
											<img id="small-pic2" src="images/benadryl.png"></img>
										</div>
										<div class="col-sm-10">
											<h4 class="nomargin"><input type="hidden" name="name1" value="Benadryl">
												Benadryl
											</input>	
											</h4>
											<p>
												A medication which reduces itching, sneezing, coughing through because of its properties as an anti-histamine.
											</p>
										</div>	
									</div>
								</td>

								<td data-th="Price"><input type="hidden" name="Price1" value=01.99> 
									$1.99</input>
								</td>

								<td data-th="Quantity">
									<input type="number" name="Quantity1" id="amount" class="form-control text-center" min="0" value="0"></input>
								</td>

								<td data-th="Subtotal" id="subtotal-1" name="Subtotal" class="text-center">0</td>
								<td>
									<input type="hidden" name="step" value="1"></input>
									<button type="button" id="button1" name="button-1"class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>
					</form>	
					<form id="medication-product-2" method="POST">

							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2">
											<img src="images/motrin.jpg" id="small-pic"></img>
										</div>
										<div class="col-sm-10">
											<h4 >
											<input type="hidden" name="name2" value="Motrin"></input>
												Motrin 
											</h4>
											<p>
												Pain Reliever and Fever Reducer 
											</p>
										</div>	
									</div>
								</td>

								<td data-th="Price">
								<input type="hidden" name="Price2" value="3.99">
									$3.99
								</input>	
								</td>

								<td data-th="Quantity">
									<input type="number"      name="Quantity2"
									 id="amount2" min="0" class="form-control text-center" value="0"></input>
								</td>

								<td data-th="Subtotal" id="subtotal-2" 
								name="Subtotal" class="text-center">0</td>
								<td>
								<input type="hidden" name="step" value="2"></input>
									<button type="button2" id="button2" name="button-2" class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>	
						</tbody>
					</form>	
					</table>

			</div>


		<script  type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js">
		</script>
		<script type="text/javascript" src="js/medication.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/signout.js"></script>
	</body>

</html>