<?php
    require_once("../includes/db_connection.php");
    $id=$_GET['id'];
    $sql="DELETE FROM customers WHERE customer_id='$id' ";
    $query=$con->query($sql);
    if($query){
        header("location:all_customers.php");
    }else{
        echo "Data Not Deleted ";
    }

?>