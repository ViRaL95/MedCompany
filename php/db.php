<?php
$server='localhost';
//database username 
$username='root';
//data password
$password='password';
//the database name 
$dbname='MedCompany';
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed ".$conn->connect_error);
}
else
?>