<?php
$username='xampp';
$password='Password';
$dbname='MedCompany'
	$conn=mysqli_connect('localhost','xampp','Password','LoanOrgSystem');
if($conn===false)
	print "Did not connect";
else
	print "connected";

?>