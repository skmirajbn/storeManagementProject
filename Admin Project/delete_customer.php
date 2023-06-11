<?php
    require_once("includes/db_connection.php");
    if(isset($_GET['customer_id'])){
        $id=$_GET['customer_id'];
        $sql="DELETE FROM customers WHERE customer_id=$id";
        $query=$con->query($sql);
        if($query){
            header("location:all_customers.php");
        }else{
            echo "Data Not Deleted ";
        }
    }
?>