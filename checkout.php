<?php
//include_once'./php/redirect.php';
?>
<!DOCTYPE HTML>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Shopping Cart </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"></link>
	<link rel="stylesheet" type="text/css" href="css/style.css"></link>
	<script src="vex/dist/js/vex.combined.js"></script>
	<script> vex.defaultOptions.className = 'vex-theme-os'</script>
	<link rel="stylesheet" type="text/css"  href="vex/dist/css/vex.css"></link>
	<link rel="stylesheet" type="text/css" href="vex/dist/css/vex-theme-os.css"></link>		
	</script>


</head>

<body>
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
					<th style="width:20%">Edit Quantity</th>
					<th style="width:10%">Price</th>
					<th style="width:10%">Subtotal</th>
					<th style="width:10%"></th>
				</tr>
			</thead>
			</table>
				<?php 
			include_once "./php/db.php";
				$result=$conn->query("SELECT * FROM medtable");
					  while($row=mysqli_fetch_array($result)){
					  	echo '<form id="form-'.$row["Product"].'"type="POST">';
					  	echo '<table class="table table-hover table-condensed" id="table-'.$row["Product"].'">';
					  	echo '<tr>';
					  	echo'<td style="width:50%" name="name-'.$row["Product"].'">'.$row["Product"].'</td>';
					  	echo '<td style="width:20%"> <input type="number" name="amount" id="num-'.$row["Product"].'" min="0" value="'.$row['Amount'].'"</input></td>';
					  	echo '<td style="width:10%">'.$row["Price"]. '</td>';
					  	echo '<td id="subtotal-'.$row["Product"].'"style="width:10%" value="'.$row["Subtotal"].'">'.$row["Subtotal"].'</td><input type="hidden" name="hidden-'.$row['Product'].'"id="hidden-'.$row["Product"].'"value="'.$row["Subtotal"].'"</input>';
					  	echo '<td style="width:10%"><input type="button"id="'.$row["Product"].'"
					  		name="'.$row["Product"].'"class="btn btn-primary" value="Submit">
					  		 </input></td>';
					  	echo '<td><input type="hidden" name="product" value="'.$row["Product"].'"></input></td>';
					  	echo "</tr>";
					  	echo "</table></form>";
					  }
					?>

		<?php $result=$conn->query("SELECT * FROM vitaminstable");
			while($row=mysqli_fetch_array($result)){
				$productname=explode(" ",$row["Product"]);
			echo '<form id="form-'.$productname[0].'"type="POST">';
			echo '<table class="table table-hover table-condensed" id="table-'.$row["Product"].'"';
			echo'<tr>';
			echo '<td style="width:50%" name="name-'.$row["Product"].'">'.$row["Product"].'</td>';
			echo '<td style="width:20%"> <input type="number" id="num-'.$row["Product"].'" min="0" name="amount" value="'.$row['Amount'].'"</input></td>';
			echo '<td style="width:10%" name="'.$row["Price"].'">'.$row["Price"].'</td>';
			echo '<td id="subtotal-'.$productname[0].'"style="width:10%" value="'.$row["Subtotal"].'">'.$row["Subtotal"].'</td><input type="hidden" name="hidden-'.$productname[0].'"id="hidden-'.$productname[0].'"value="'.$row["Subtotal"].'"</input>';
			echo '<td style="width:10%"><input type="button" name="'.$row["Product"].'" id="'.$productname[0].'" value="Submit" class="btn btn-primary"></input></td>';
			echo '<td><input type="hidden" name="product" value="'.$row['Product'].'"></input></td>';
			echo "</tr>";			
			echo "</table></form>";
			}
			?>
			<form id="total-price" method="POST">
			<?php
			$fetch=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($fetch);
				echo"<table>";
				echo "<th style='width:90%'></th>";
				echo "<th style='width:10%'>Subtotal</th>";
				echo "<hr>";
				echo"<tr>";
				echo'<td style="width:90%"></td>';
				echo '<td style="width:10%" id="Final-Subtotal">'.$row['total'].'</td>';
				echo '<td><input type="button" name="purchase" value="Purchase" id="purchase" class="btn btn-primary"></input></td>';
				echo '</tr>';	
				echo'</table>';
				?>
			</form>
	</div>		

		<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="js/checkout.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/signout.js"></script>
	</body>