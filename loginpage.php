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
		<div class="exterior">
			<div class="container">
				<div class="jumbotron">
					<h3><p>Welcome To Vi_ral's Pharmaseuticals</p></h3>
					<h4>This website is simply a dummy  website with user login/signout/and shopping-car <br> Username:Vi_ral Password:M</h4>
				</div>

				<div id="error"></div>	
				<div class="login-form">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Login Form</div>
									  <div class="panel-body">
									  		<form name="loginform" id="loginform" method="POST">
										    	Username:<input type="text" name="username" id="username"></input>
										    	Password:<input type="password" name="password" id="password"></input>
										    	<button type="submit" id="button" name="login-button"> Click me</button>
									   		</form>
									  </div>
								</div>
							</div>	
						</div>	
					</div>
				</div>	
			</div>	
		</div>

		
		<script src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="../MedCompany/js/bootstrap.js"></script>
		<script type="text/javascript" src="../MedCompany/js/javascript.js"></script>
		<script type="text/javascript" src="js/confirm.js"></script>
	</body>
</html>