<?php
if($_SESSION['login']!=1){
	echo "".$_SESSION['login'];
	header ('location: ./index.php');
	die;
}

?>