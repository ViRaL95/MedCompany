<!DOCTYPE HTML>
<html>
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
								<li><a href="supplements.html">Supplements</a></li>
								<li><a href="medication.html">Medication</a></li>
							</ul>
						</li>	
						<li><a href="aboutus.html">About Us</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right" style="background-color:#2a6cd6"role="navigation">
						  <li><a href="/code/MedCompany/loginpage.php"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
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
					<form id="vitamins-product-1" method="POST">	
						<tbody>
							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2 hidden xs">
											<img src="images/omega-3.jpg"></img>
										</div>
										<div class="col-sm-10">
											<h4 class="nomargin"><input type="hidden" name="name1" value="Product 1">
												Product 1
											</input>	
											</h4>
											<p>Description about Product1</p>
										</div>	
									</div>
								</td>

								<td data-th="Price"><input type="hidden" name="Price1" value=0199> 
									$1.99</input>
								</td>

								<td data-th="Quantity">
									<input type="number" name="Quantity1" id="amount" class="form-control text-center" min="0" value="0"></input>
								</td>

								<td data-th="Subtotal" id="subtotal-1" name="Subtotal" class="text-center">0</td>
								<td>
									<button type="button" id="button" class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>
					</form>	
					<form id="vitamins-product-2" method="POST">

							<tr>
								<td data-th="Product">
									<div class="row">
										<div class="col-sm-2 hidden xs">
											<img src="images\omega-3.jpg"></img>
										</div>
										<div class="col-sm-10">
											<h4 >
												Product 2
											</h4>
											<p>Description about Product1</p>
										</div>	
									</div>
								</td>

								<td data-th="Price">
									$3.99
								</td>

								<td data-th="Quantity">
									<input type="number" id="amount2" min="0" class="form-control text-center" value="0"></input>
								</td>

								<td data-th="Subtotal" id="subtotal-2"  class="text-center">0</td>
								<td>
									<button type="button2" id="button2" class="btn btn-primary">
   										 Add To Cart<span class="glyphicon glyphicon-shopping-cart"></span>
									</button>
								</td>
							</tr>	
						</tbody>
					</form>	
					</table>

			</div>



		<script src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.js"></script>
</body>		
</html>