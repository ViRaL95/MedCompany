<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);
echo "hi";

$server='localhost';
$username='root';
$password='password';
$dbname='MedCompany';
error_reporting(-1);
$conn=new mysqli($server,$username,$password,$dbname);
if($conn->connect_error){
	echo"hihihi";
	die("connection failed ".$conn->connect_error);
}
else
	echo"connceted succesfully";

?>