<?php
include_once('db.php');
if(($_POST["product"])=="Benadryl"){
	$amount=$_POST['amount'];
	$subtotal=$_POST["hidden-Benadryl"];
	$sql='UPDATE medtable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Benadryl"';
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql) && $conn->query($sql2)){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
		echo "failed";
	}
}
else if(($_POST["product"])=="Motrin"){
	$amount=$_POST['amount'];
	$subtotal=$_POST["hidden-Motrin"];
	$sql='UPDATE medtable SET Amount='.$amount.',Subtotal='.$subtotal.' WHERE Product="Motrin"';
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql)===TRUE && $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
		echo "failed";
	}

}
else if(($_POST["product"])=="Vitamin D Supplements"){
	$amount=$_POST['amount'];
	$subtotal=$_POST["hidden-Vitamin"];
	$sql='UPDATE vitaminstable SET Amount='.$amount.', Subtotal='.$subtotal.' WHERE Product="Vitamin D Supplements"';
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql)===TRUE&& $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
		echo "failed";
	}
}
else if(($_POST["product"])=="Omega 3"){
	$amount=$_POST['amount'];
	$subtotal=$_POST["hidden-Omega"];
	$sql='UPDATE vitaminstable SET Amount='.$amount.', Subtotal='.$subtotal.'WHERE Product="Omega 3"';
	$sql2="UPDATE totalprice SET total=(SELECT IFNULL(SUM(Subtotal),0) FROM medtable)+(SELECT IFNULL(SUM(Subtotal),0) FROM vitaminstable)";
	if($conn->query($sql)===TRUE && $conn->query($sql2)===TRUE){
		$result=$conn->query("SELECT * FROM totalprice");
		$row=mysqli_fetch_assoc($result);		
		echo "".$row['total'];
	}
	else{
		echo "failed";
	}
}
?>