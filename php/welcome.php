<?php
	include_once 'db.php';
	session_start();
		$loginname=$_POST["username"];
		$password=$_POST["password"];
		if($result=$conn->query("SELECT * FROM userlogin WHERE (username='$loginname' AND password='$password')")){
			$numrows=mysqli_num_rows($result);
			if($numrows>0){
				echo "Login Succesfull";

			}
			else{

				echo "Login Failed";
			}
		}
?>