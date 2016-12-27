<?php
	include_once 'db.php';
	session_start();

	if($_POST['step']==1){
	$name=$_POST['name1'];
	$price=$_POST['Price1'];
	
	$quantity=$_POST['Quantity1'];
	$subtotal= $quantity*$price;
     
	if($result=$conn->query("SELECT * FROM medtable WHERE Product='$name'")){
		$numrows=mysqli_num_rows($result);

		if($numrows>0){
			$update1="UPDATE medtable SET Amount= Amount+'$quantity', Subtotal=Subtotal+'$subtotal' WHERE Product='$name' ";
			$check=$conn->query("SELECT * FROM totalprice");
			if(mysqli_num_rows($check)==0){
			$update2="INSERT INTO totalprice (total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable))";
			}
			else{
				$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
			}
			if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
               echo "success19";
			}
			else{
				echo "failed23";
			}
		}
	
		else{
		$update1="INSERT INTO medtable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";
		$check=$conn->query("SELECT * FROM totalprice");
		
		if(mysqli_num_rows($check)==0){
		$update2="INSERT INTO totalprice (total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable))";
		}
		
		else{
		$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		}

		
		if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
		echo"success30";
		}
		else{
			echo"faield35";
		}
		}

		}
}


if($_POST['step']==2){
	$name=$_POST['name2'];
	$price=$_POST['Price2'];
	
	$quantity=$_POST['Quantity2'];
	$subtotal= $quantity*$price;

	if($result=$conn->query("SELECT * FROM medtable WHERE Product='$name'")){
		$numrows=mysqli_num_rows($result);

		if($numrows>0){
			$update1="UPDATE vitaminstable SET Amount= Amount+'$quantity',Subtotal=Subtotal='$subtotal' WHERE Product='$name'";
			$check=$conn->query("SELECT * FROM totalprice");

			if(mysqli_num_rows($check)==0){
			$update2="INSERT INTO totalprice (total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable))";
			}
			else{
				$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
			}

			if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
				echo"sucess57";
			}
			else{
				echo"error65";
			}
		}
		else{

		$update1="INSERT INTO medtable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";

		$check=$conn->query("SELECT * FROM totalprice");

		if(mysqli_num_rows($check)==0){
			$update2="INSERT INTO totalprice (total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable))";
		}
		else{
			$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable) +(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		}
		if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
			echo "success67";
		}
		else{
			echo"failed70";
		}
	}
}
}
?>