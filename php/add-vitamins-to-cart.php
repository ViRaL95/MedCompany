<?php
	include_once 'db.php';
	session_start();

	$name=$_POST['name1'];
	$price=$_POST['Price1'];
	
	$quantity=$_POST['Quantity1'];
	$subtotal= $quantity*$price;

	echo"Price is $price";

	if($result=$conn->query("SELECT * FROM vitaminstable WHERE Product='$name'")){
		$numrows=mysqli_num_rows($result);

		if($numrows>0){
			$update1="UPDATE vitaminstable SET Amount= Amount+'$quantity' WHERE Product='$name'";
			$update2="UPDATE vitaminstable SET Subtotal=Subtotal+'$subtotal' WHERE Product='$name'";
			if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
				echo "Updated table succesfully";

			}
			else{
				echo"error";
			}
		}
		else{
		$sql="INSERT INTO vitaminstable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";

		if($conn->query($sql)===TRUE){
			echo"success";
		}

		}

	}




?>