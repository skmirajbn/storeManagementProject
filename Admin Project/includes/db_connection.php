<?php
$host = "skmiraj.online";
$dbuser = "skmiraj";
$dbpass = "SWKbBT.LjXo-8Tj6";
$dbname = "skmiraj_storemanagement";

$con = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($con->connect_error) {
    die("");
}
?>