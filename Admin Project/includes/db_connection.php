<?php 
$host = "skmiraj.online";
$dbuser = "skmiraj";
$dbpass = "6XfwV(z{zfc!P38H";
$dbname = "skmiraj_storemanagement";

$con = new mysqli($host, $dbuser, $dbpass, $dbname);
if($con->connect_error){
    die("");
}
?>