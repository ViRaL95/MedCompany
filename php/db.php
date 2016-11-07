<?php
echo"hi";
$server='localhost';
$username='root';
$password='password';
$dbname='MedCompany';
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error)
	die("connection failed ".$conn->connect_error);
else
	echo"connceted succesfully";

?>