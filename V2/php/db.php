<?php
$server='localhost';
//database username 
$username='viral_user';
//data password
$password='Codingislife1';
//the database name 
$dbname='viral_MedCompany';
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed ".$conn->connect_error);
}
else
?>