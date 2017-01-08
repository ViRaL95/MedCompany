<?php
include_once "db.php";
$sql="TRUNCATE TABLE vitaminstable";
$sql2="TRUNCATE TABLE medtable";
$sql3="TRUNCATE TABLE totalprice";

if($result=$conn->query($sql)===TRUE){
session_destroy();
echo"cleared vitaminstable";


}
if($conn->query($sql2)===TRUE){
session_destroy();
echo "cleared medtable";
}
if($conn->query($sql3)===TRUE){
session_destroy();
echo "cleared totalprice";

}


?>