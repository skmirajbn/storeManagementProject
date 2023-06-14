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
    $sql="INSERT INTO customers(customer_name,customer_address,customer_phone,customer_email,customer_status) VALUES('$name','$address','$phone','$email',1)";
    $query=$con->query($sql);
    if($query){
        
        echo "Upload SuccessFul";
    }else{
        echo "Data Upload Failed";
    }
}

//Delete customar - Mosharrof
if(isset($_GET['customer_id'])){
    $id=$_GET['customer_id'];
    $sql="UPDATE customers SET customer_status=0 WHERE customer_id= $id";
    $query=$con->query($sql);
    if($query){
        header("location: pages/all_customers.php");
    }else{
        echo "Data Not Deleted ";
    }
}
//Restore customar - Mosharrof
if(isset($_GET['restore_customer_id'])){
    $id=$_GET['restore_customer_id'];
    $sql="UPDATE customers SET customer_status = 1 WHERE customer_id= $id";
    $query=$con->query($sql);
    if($query){
        header("location: pages/restore_customers.php");
        echo "Successfull";
    }else{
        echo "Data Not Deleted ";
    }
}

//Parmanently Delete - Mosharrof
if(isset($_GET['par_delete_customer_id'])){
    $id=$_GET['par_delete_customer_id'];
    $sql="DELETE FROM customers WHERE customer_id= $id";
    $query=$con->query($sql);
    if($query){
        header("location: pages/restore_customers.php");
        echo "Successfull";
    }else{
        echo "Data Not Deleted ";
    }
}

//Update Customar - Mosharrof
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

  //Add product Mosharrof

    if(isset($_POST["addProduct"])){
        $product_name=$_POST["product_name"];
        $product_brand=$_POST["product_brand"];
        $product_category=$_POST["product_category"];
        $product_unit=$_POST["product_unit"];
        $product_sku=$_POST["product_sku"];
        $product_price=$_POST["product_price"];
        $product_desc=$_POST["product_desc"];
        $pd_img_name=$_FILES["product_image"]["name"];
        $pd_img_tmpname=$_FILES["product_image"]["tmp_name"];

        $imageName='product_'.time().'_'.rand(100000,100000000).'.'.pathinfo($pd_img_name,PATHINFO_EXTENSION); 

        $sql="INSERT INTO products(product_name,brand_id,category_id,unit_id,sku,selling_price,product_image,description ) VALUES('$product_name','$product_brand','$product_category','$product_unit','$product_sku','$product_price','$imageName','$product_desc' )";
        $query=$con->query($sql);
        if($query){
            move_uploaded_file($pd_img_tmpname,'uploads/'.$imageName);
            echo "Upload Successfull";
        }else{
            echo "Upload Faild";
        }
    }

 //Update Product - Mosharrof 
    
    if(isset($_POST["updateProduct"])){
        $product_name=$_POST["product_name"];
        $product_brand=$_POST["product_brand"];
        $product_category=$_POST["product_category"];
        $product_unit=$_POST["product_unit"];
        $product_sku=$_POST["product_sku"];
        $product_price=$_POST["product_price"];
        $product_desc=$_POST["product_desc"];
        $pd_img_name=$_FILES["product_image"]["name"];
        $pd_img_tmpname=$_FILES["product_image"]["tmp_name"];
        
        $imageName='product_'.time().'_'.rand(100000,100000000).'.'.pathinfo($pd_img_name,PATHINFO_EXTENSION); 
    
        $sql="UPDATE products SET product_name='$product_name',brand_id='$product_brand',category_id='$product_category',unit_id='$product_unit',sku='$product_sku',selling_price='$product_price',product_image='$imageName',description='$product_desc')";
        $query=$con->query($sql);
        if($query){
          move_uploaded_file($pd_img_tmpname,'uploads/'.$imageName);
          echo "Update Successfull";
        }else{
          echo "Update Faild";
        }
    }
  //Add role - Ali Hasan
    if(isset($_POST['add_role'])){
    $role_name = $_POST['i_role_name'];

    $insests="INSERT INTO roles(role_name)
    VALUES('$role_name')";
    $query=$con->query($insests);
    if($query){
    header ('loaction: ./pages/all_role.php');
    }else{
    echo "failed";
    }
    }
    //Add user - Ali Hasan
    if(isset($_POST['add_user'])){
    $user_name = $_POST['i_user_name'];
    $user_username = $_POST['i_user_username'];
    $user_email = $_POST['i_user_email'];
    $user_pass = $_POST['i_user_pass'];


    $insests="INSERT INTO users(user_name,user_email,user_password,user_username) 
    VALUES('$user_name','$user_email','$user_pass','$user_username')";
    $query=$con->query($insests);
    if($query){
    echo "Success";
    }else{
    echo "failed";
    }
  }
?>