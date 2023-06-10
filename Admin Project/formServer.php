<?php 
require_once("includes/db_connection.php");


// Add Category Data Insert
if(isset($_POST["addCategory"])){
    $categoryName = $_POST["categoryName"];

    $sql = "INSERT INTO categories(category_name) VALUES('$categoryName')";
    $query = $con->query($sql);
    if($query){
        echo "Data Inserted Successfully";
    }
}

//Category Data Delete
if(isset($_GET['categoryDelete'])){
    $id = $_GET['categoryDelete'];
    $sql = "DELETE FROM categories WHERE category_id = $id";
    $delete = $con->query($sql);
    if($delete){
        header("Location: pages/all_categories.php");
    }
}
//Add customar
if(isset($_POST['addCustomer'])){
    $name=$_POST["customer_name"];
    $address=$_POST["customer_address"];
    $phone=$_POST["customer_phone"];
    $email=$_POST["customer_email"];
    $sql="INSERT INTO customers(customer_name,customer_address,customer_phone,customer_email) VALUES('$name','$address','$phone','$email')";
    $query=$con->query($sql);
    if($query){
        echo "Upload SuccessFul";
    }else{
        echo "Data Upload Failed";
    }
}
           
?>