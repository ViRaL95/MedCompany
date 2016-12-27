<?php
	include_once 'db.php';
	session_start();

	if($_POST['step']==1){
	$name=$_POST['name1'];
	$price=$_POST['Price1'];
	
	$quantity=$_POST['Quantity1'];
	$subtotal= $quantity*$price;


	if($result=$conn->query("SELECT * FROM vitaminstable WHERE Product='$name'")){
		$numrows=mysqli_num_rows($result);

		if($numrows>0){
			$update1="UPDATE vitaminstable SET Amount= Amount+'$quantity', Subtotal=Subtotal+'$subtotal' WHERE Product='$name'";
			$check=$conn->query("SELECT * FROM totalprice");
			$numrows2=mysqli_num_rows($check);
			
			if($numrows2==0){
			$update2="INSERT INTO totalprice(total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM  vitaminstable)+ (SELECT IFNULL(SUM(Subtotal),0) FROM medtable))";
			}
			else{
			$update2="UPDATE totalprice SET total= (SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)+(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)";	
			}
			if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){ 
				echo"success21";
			}
			else{
				echo"error24";
			}
		}
		else{
		$update1="INSERT INTO vitaminstable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";
		$check=$conn->query("SELECT * FROM totalprice");
		if(mysqli_num_rows($check)==0){
		$update2="INSERT INTO totalprice (total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)+(SELECT IFNULL(SUM(Subtotal),0) FROM medtable))";
		}
		else{
			$update2="UPDATE totalprice SET total= (SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)+ (SELECT IFNULL(SUM(Subtotal),0) FROM medtable)";
		}
		if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
			echo "success33";
		}
		else{
			echo"failed36";
		}

		}

}}

if($_POST['step']==2){
	$name=$_POST['name2'];
	$price=$_POST['Price2'];
	
	$quantity=$_POST['Quantity2'];
	$subtotal= $quantity*$price;

	if($result=$conn->query("SELECT * FROM vitaminstable WHERE Product='$name'")){
		$numrows=mysqli_num_rows($result);

		if($numrows>0){
			$update1="UPDATE vitaminstable SET Amount= Amount+'$quantity', Subtotal=Subtotal+'$subtotal' WHERE Product='$name'";
			$check=$conn->query("SELECT * FROM totalprice");

			if(mysqli_num_rows($check)==0){
			$update2="INSERT INTO totalprice(total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM  vitaminstable)+ (SELECT IFNULL(SUM(Subtotal),0) FROM medtable))";
			}

			else{
				$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
			}
			if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
				echo "success63";
			}
			else{
				echo"error66";
			}
		}
		else{
		$update1="INSERT INTO vitaminstable (Product, Price, Amount, Subtotal) VALUES ('$name', '$price', '$quantity', $subtotal)";
		$check=$conn->query("SELECT * FROM totalprice");
		if(mysqli_num_rows($check)==0){
		$update2="INSERT INTO totalprice(total) VALUES((SELECT IFNULL(SUM(Subtotal),0) FROM  vitaminstable)+ (SELECT IFNULL(SUM(Subtotal),0) FROM medtable))";
		}
		else{
			$update2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		}
		if($conn->query($update1)===TRUE && $conn->query($update2)===TRUE){
				echo"success79";
		}
		else{
			echo "failed76";
		}}
}}
?>