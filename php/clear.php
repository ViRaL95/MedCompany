<?php
include_once "db.php";
$sql="TRUNCATE TABLE vitaminstable";
$sql2="TRUNCATE TABLE medtable";


if($result=$conn->query($sql)===TRUE){
session_destroy();
echo"cleared vitaminstable";


}
if($conn->query($sql2)===TRUE){
session_destroy();
echo "cleared medtable";


}


?>