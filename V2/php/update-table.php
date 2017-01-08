<?php
include_once('db.php');
if(($_POST["product"])=="Benadryl"){
	$amount=$_POST['amount'];
	if($amount==0){
		$sql="DELETE FROM medtable WHERE Product='Benadryl'";
		$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		if($conn->query($sql)&&$conn->query($sql2)){
			$result=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($result);		
			echo "$".$row['total'];
		}
		else{
		}

	}
	else{
	$subtotal=$_POST["hidden-Benadryl"];
	$sql="SELECT * FROM medtable where Product='Benadryl'";
	$result=$conn->query($sql);

		if(mysqli_num_rows($result)>0){
		$sql1='UPDATE medtable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Benadryl"';
		}

		else{
		$sql1="INSERT INTO medtable (Product, Price, Amount, Subtotal) VALUES ('Benadryl',1.99,'$amount','$subtotal')";	
		}
		
		$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		
		if($conn->query($sql1) && $conn->query($sql2)){
			$result=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($result);		
			echo "$".$row['total'];
		}

		else{
		}
	}
}
else if(($_POST["product"])=="Motrin"){
	$amount=$_POST['amount'];
	if($amount==0){
		$sql="DELETE FROM medtable WHERE Product='Motrin'";
		$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		if($conn->query($sql) && $conn->query($sql2)){
			$result=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($result);		
			echo "$".$row['total'];
		}
		else{
		}

	}
	else{
	$subtotal=$_POST["hidden-Motrin"];
	$sql="SELECT * FROM medtable WHERE Product='Motrin'";
	$result=$conn->query($sql);

	if(mysqli_num_rows($result)>0){
	$sql1='UPDATE medtable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Motrin"';
	}
	else{
	$sql1="INSERT INTO medtable (Product, Price, Amount, Subtotal) VALUES ('Motrin',3.99,'$amount','$subtotal')";	
	}	
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
	}
	}
}
else if(($_POST["product"])=="Vitamin D Supplements"){
	$amount=$_POST['amount'];
	if($amount==0){
		$sql="DELETE FROM vitaminstable WHERE Product='Vitamin D Supplements'";
		$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
		if($conn->query($sql) && $conn->query($sql2)){
			$result=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($result);		
			echo "$".$row['total'];
		}
		else{
		}
	}
	else{
	$subtotal=$_POST["hidden-Vitamin"];
	$sql="SELECT * FROM vitaminstable WHERE Product='Vitamin D Supplements'";
	$result=$conn->query($sql);
	
	if(mysqli_num_rows($result)>0){
	$sql1='UPDATE vitaminstable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Vitamin D Supplements"';
	}
	
	else{
	$sql1="INSERT INTO vitaminstable (Product, Price, Amount, Subtotal) VALUES ('Vitamin D Supplements',1.99,'$amount','$subtotal')";	
	}
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql1)===TRUE&& $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
	}
	}
}
else if(($_POST["product"])=="Omega 3"){
	$amount=$_POST['amount'];
	if($amount==0){
		$sql="DELETE FROM vitaminstable WHERE Product='Omega 3'";
		$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";

		if($conn->query($sql) && $conn->query($sql2)){
			$result=$conn->query("SELECT * FROM totalprice");
			$row=mysqli_fetch_assoc($result);		
			echo "$".$row['total'];
		}
		else{
		}
	}
	else{
	$subtotal=$_POST["hidden-Omega"];
	$sql="SELECT * FROM  vitaminstable WHERE Product='Omega 3'";
	$result=$conn->query($sql);

	if(mysqli_num_rows($result)>0){
	$sql1='UPDATE vitaminstable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Omega 3"';
	}

	else{
	$sql1="INSERT INTO vitaminstable (Product, Price, Amount, Subtotal) VALUES ('Omega 3',3.99,'$amount','$subtotal')";	
	}	
	$sql='UPDATE vitaminstable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Omega 3"';
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql1)===TRUE && $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);	
		echo "$".$row['total'];	
	}
	else{
	}
}
}
?>