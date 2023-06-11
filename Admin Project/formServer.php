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

//Delete customar
if(isset($_GET['customer_id'])){
    $id=$_GET['customer_id'];
    $sql="DELETE FROM customers WHERE customer_id= $id";
    $query=$con->query($sql);
    if($query){
        header("location: pages/all_customers.php");
    }else{
        echo "Data Not Deleted ";
    }
}

//Update Customer
if(isset($_POST['updateCustomer'])){
    $id=$_POST['updateCustomer'];
    $name=$_POST["customer_name"];
    $address=$_POST["customer_address"];
    $phone=$_POST["customer_phone"];
    $email=$_POST["customer_email"];
    $sql="UPDATE customers SET customer_name='$name', customer_address='$address', customer_phone='$phone', customer_email='$email' WHERE customer_id = $id";
    $query=$con->query($sql);
    if($query){
        echo "Updated <a style='display:inline-block; margin:20px' href='pages/all_customers.php' class='btn mybtn-hightlight'>See All Customers</a>";
    }else{
        echo "Note Update";
    }
}

//Update Category

if(isset($_POST['updateCategory'])){
    $categoryName = $_POST['categoryName'];
    $id = $_POST['updateCategory'];
  
    $sql = "UPDATE categories SET category_name = '$categoryName' WHERE category_id = $id ";
    $query = $con->query($sql);
    if($query){
        echo "Updated Category <a style='display:inline-block; margin:20px' href='pages/all_categories.php' class='btn mybtn-hightlight'>See All Category</a>";
    }else{
      echo "Failed";
    }
  }
?>