<?php
require_once("includes/db_connection.php");

//Customers Section  Start <<================================>>

//Add customar
if (isset($_POST['addCustomer'])) {
    $name = $_POST["customer_name"];
    $address = $_POST["customer_address"];
    $phone = $_POST["customer_phone"];
    $email = $_POST["customer_email"];
    $sql = "INSERT INTO customers(customer_name,customer_address,customer_phone,customer_email,customer_status) VALUES('$name','$address','$phone','$email',1)";
    $query = $con->query($sql);
    if ($query) {

        echo "Upload SuccessFul";
    } else {
        echo "Data Upload Failed";
    }
}

//Update Customar - Mosharrof
if (isset($_POST['updateCustomer'])) {
    $id = $_POST['updateCustomer'];
    $name = $_POST["customer_name"];
    $address = $_POST["customer_address"];
    $phone = $_POST["customer_phone"];
    $email = $_POST["customer_email"];
    $sql = "UPDATE customers SET customer_name='$name', customer_address='$address', customer_phone='$phone', customer_email='$email' WHERE customer_id = $id";
    $query = $con->query($sql);
    if ($query) {
        echo "Updated <a style='display:inline-block; margin:20px' href='pages/all_customers.php' class='btn mybtn-hightlight'>See All Customers</a>";
    } else {
        echo "Note Update";
    }
}

//Delete customar - Mosharrof
if (isset($_GET['customer_id'])) {
    $id = $_GET['customer_id'];
    $sql = "UPDATE customers SET customer_status=0 WHERE customer_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/all_customers.php");
    } else {
        echo "Data Not Deleted ";
    }
}

//Restore customar - Mosharrof
if (isset($_GET['restore_customer_id'])) {
    $id = $_GET['restore_customer_id'];
    $sql = "UPDATE customers SET customer_status = 1 WHERE customer_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_customer.php");
    } else {
        echo "Data Not Deleted ";
    }
}

//Parmanently Delete Customer - Mosharrof
if (isset($_GET['par_delete_customer_id'])) {
    $id = $_GET['par_delete_customer_id'];
    $sql = "DELETE FROM customers WHERE customer_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_customer.php");
    } else {
        echo "Data Not Deleted ";
    }
}
//Customers Section  End <<================================>>


//Products Section  Start <<================================>>

//Add product Mosharrof

if (isset($_POST["addProduct"])) {
    $product_name = $_POST["product_name"];
    $product_brand = $_POST["product_brand"];
    $product_category = $_POST["product_category"];
    $product_sub_category = $_POST["product_sub_category"];
    $product_unit = $_POST["product_unit"];
    $product_sku = $_POST["product_sku"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    $pd_img_name = $_FILES["product_image"]["name"];
    $pd_img_tmpname = $_FILES["product_image"]["tmp_name"];
    $imageName = '';

    if ($pd_img_name !== '') {
        $imageName = 'product_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($pd_img_name, PATHINFO_EXTENSION);
    }

    $sql = "INSERT INTO products(product_name,brand_id,category_id,sub_category_id,unit_id,sku,selling_price,product_image,description, product_status) VALUES('$product_name','$product_brand','$product_category','$product_sub_category','$product_unit','$product_sku','$product_price','$imageName','$product_desc', 1)";
    $query = $con->query($sql);
    if ($query) {
        move_uploaded_file($pd_img_tmpname, 'uploads/images/' . $imageName);
        echo "Upload Successfull";
    } else {
        echo "Upload Faild";
    }
}

//Update Product - Mosharrof 

if (isset($_POST["updateProduct"])) {
    $product_id = $_POST['updateProduct'];
    $product_name = $_POST["product_name"];
    $product_brand = $_POST["product_brand"];
    $product_category = $_POST["product_category"];
    $product_unit = $_POST["product_unit"];
    $product_sku = $_POST["product_sku"];
    $product_price = $_POST["product_price"];
    $product_desc = $_POST["product_desc"];
    // $product_img_name=$_POST["image_name"];
    $pd_img_name = $_FILES["product_image"]["name"];
    $pd_img_tmpname = $_FILES["product_image"]["tmp_name"];

    $imageName = 'product_' . time() . '_' . rand(100000, 100000000) . '.' . pathinfo($pd_img_name, PATHINFO_EXTENSION);

    if (!empty($pd_img_name)) {
        $sql = "UPDATE products SET product_name='$product_name',brand_id='$product_brand',category_id='$product_category',unit_id='$product_unit',sku='$product_sku',selling_price='$product_price', product_image= '$imageName',description='$product_desc' WHERE product_id =  $product_id";
    } else {
        $sql = "UPDATE products SET product_name='$product_name',brand_id='$product_brand',category_id='$product_category',unit_id='$product_unit',sku='$product_sku',selling_price='$product_price',description='$product_desc' WHERE product_id =  $product_id";
    }

    $query = $con->query($sql);
    if ($query) {
        if (!empty($pd_img_name)) {
            move_uploaded_file($pd_img_tmpname, 'uploads/images/' . $imageName);
        }
        echo "Update Successfull";
    } else {
        echo "Update Faild";
    }
}

//Delete Product - Mosharrof
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
    $sql = "UPDATE products SET product_status=0 WHERE product_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/all_products.php");
    } else {
        echo "Data Not Deleted ";
    }
}

//Restore Product - Mosharrof
if (isset($_GET['restore_product_id'])) {
    $id = $_GET['restore_product_id'];
    $sql = "UPDATE products SET product_status = 1 WHERE product_id = $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_product.php");
    } else {
        echo "Data Not Deleted ";
    }
}

//Parmanently Product Delete - Mosharrof
if (isset($_GET['par_delete_product_id'])) {
    $id = $_GET['par_delete_product_id'];
    $sql = "DELETE FROM products WHERE product_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_product.php");
    } else {
        echo "Data Not Deleted ";
    }
}
//Products Section  End <<================================>>

//Categoris Section  Start <<================================>>
// Add Category Data Insert
if (isset($_POST["addCategory"])) {
    $categoryName = $_POST["categoryName"];

    $sql = "INSERT INTO categories(category_name, category_status) VALUES('$categoryName',1)";
    $query = $con->query($sql);
    if ($query) {
        echo "Data Inserted Successfully";
    }
}

//Update Category 

if (isset($_POST['updateCategory'])) {
    $categoryName = $_POST['categoryName'];
    $id = $_POST['updateCategory'];

    $sql = "UPDATE categories SET category_name = '$categoryName' WHERE category_id = $id ";
    $query = $con->query($sql);
    if ($query) {
        echo "Updated Category <a style='display:inline-block; margin:20px' href='pages/all_categories.php' class='btn mybtn-hightlight'>See All Category</a>";
    } else {
        echo "Failed";
    }
}

//Category Data Delete
if (isset($_GET['categoryDelete'])) {
    $id = $_GET['categoryDelete'];
    $sql = "UPDATE categories SET category_status = 0 WHERE category_id = $id";
    $delete = $con->query($sql);
    if ($delete) {
        header("Location: pages/all_categories.php");
    }
}


// Add Sub Category
if (isset($_POST['addSubCategory'])) {
    $categoryId = $_POST['categoryId'];
    $subCategoryName = $_POST['subCategoryName'];

    $sql = "INSERT INTO sub_categories(sub_category_name,category_id,sub_category_status) VALUES('$subCategoryName', $categoryId, 1)";
    $insert = $con->query($sql);
    if ($insert) {
        echo "Sub Category Inserted";
    } else {
        echo "Sub Category Insertion Failed";
    }

}

// Update SubCategory - Sk Miraj

if (isset($_POST['updateSubCategory'])) {
    $id = $_POST['updateSubCategory'];
    $categoryId = $_POST['categoryId'];
    $subCategoryName = $_POST['subCategoryName'];

    $sql = "UPDATE sub_categories SET sub_category_name = '$subCategoryName', category_id= $categoryId WHERE sub_category_id = $id";

    $query = $con->query($sql);
    if ($query) {
        echo "Sub Category Updated";
    } else {
        echo "Sub Category Update Failed";
    }
}
//Categoris Section  End <<================================>>


//Brands Section  Start <<================================>>

//Add Brand - Mosharrof
if (isset($_POST['addbrand'])) {
    $brandName = $_POST['brandName'];
    $sql = "INSERT INTO brands(brand_name,brand_status) VALUES('$brandName',1)";
    $query = $con->query($sql);
    if ($query) {
        echo "Brand Add Successfull";
    } else {
        echo "Data Upload Failed";
    }
}

// Update Brand -Mosharrof
if (isset($_POST['editBrand'])) {
    $id = $_POST['editBrand'];
    $brandName = $_POST['brandName'];
    $sql = "UPDATE brands SET brand_name='$brandName', brand_status=1 WHERE brand_id = $id";
    $query = $con->query($sql);
    if ($query) {
        echo "Data Upload Successful";
    } else {
        echo "Data Upload Failed";
    }
}

//Delete Brand - Mosharrof
if (isset($_GET['brandDelete'])) {
    $id = $_GET['brandDelete'];
    $sql = "UPDATE brands SET brand_status=0 WHERE brand_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/all_brand.php");
    } else {
        echo "Data Not Deleted ";
    }
}

//Restore Brand -Mosharrof 
if (isset($_GET['restore_brand'])) {
    $id = $_GET['restore_brand'];
    $sql = "UPDATE brands SET brand_status=1 WHERE brand_id= $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_brand.php");
    } else {
        echo "Data Not Restored ";
    }
}

//Parmanently Delete Brand - Mosharrof
if (isset($_GET['par_brandDelete'])) {
    $id = $_GET['par_brandDelete'];
    $sql = "DELETE FROM brands WHERE brand_id = $id";
    $query = $con->query($sql);
    if ($query) {
        header("location: pages/restore_brand.php");
    } else {
        echo "Data Not Deleted ";
    }
}
//Brands Section  End <<================================>>

//Units Section  Start <<================================>>

//Units Section  End <<================================>>

//Users Section  Start <<================================>>
//Add user - Ali Hasan
if (isset($_POST['add_user'])) {
    $user_name = $_POST['i_user_name'];
    $user_username = $_POST['i_user_username'];
    $user_email = $_POST['i_user_email'];
    $user_phone = $_POST['i_user_phone'];
    $user_pass = $_POST['i_user_pass'];
    $user_repass = $_POST['i_user_repass'];
    $user_role = $_POST['i_user_role'];
    $user_image = $_FILES['i_user_photo']["name"];
    $user_tmpname = $_FILES['i_user_photo']["tmp_name"];
    $imageName = '';

    if ($user_image !== '') {
        $imageName = 'user_' . time() . '_' . rand(100000, 10000000) . '.' . pathinfo($user_image, PATHINFO_EXTENSION);
    } else {
        $imageName = 'avatar.png';
    }

    $insest = "INSERT INTO users(user_name,user_username,user_email,user_phone,user_password,role_id,user_image)
     VALUES('$user_name','$user_username','$user_email','$user_phone','$user_pass','$user_role','$imageName')";
    $query = $con->query($insest);
    if ($query) {
        move_uploaded_file($user_tmpname, 'uploads/images/' . $imageName);
        echo "Success";
    } else {
        echo "failed";
    }
}

// Update user - Ali hasan
if (isset($_POST['update_user'])) {
    $id = $_POST['update_user'];
    $user_name = $_POST['i_user_name'];
    $user_username = $_POST['i_user_username'];
    $user_email = $_POST['i_user_email'];
    $user_phone = $_POST['i_user_phone'];
    $user_role = $_POST['i_user_role'];
    $user_image = $_FILES['i_user_photo']["name"];
    $user_tmpname = $_FILES['i_user_photo']["tmp_name"];

    if ($user_image !== '') {
        $imageName = 'user_' . time() . '_' . rand(100000, 10000000) . '.' . pathinfo($user_image, PATHINFO_EXTENSION);
    }
    $sql = "UPDATE users set
        user_name='$user_name',user_username='$user_username',user_email='$user_email',user_phone='$user_phone',role_id='$user_role',user_image='$imageName'
        Where user_id=$id";
    $query = $con->query($sql);
    if ($query) {
        if (!empty($user_image)) {
            move_uploaded_file($user_tmpname, 'uploads/images/' . $imageName);
        }
        echo "Update Successfull";
    } else {
        echo "Update Faild";
    }

}
//Users Section  End <<================================>>

//Role Section  Start <<================================>>
// role - Ali Hasan

if (isset($_POST['add_role'])) {
    $role_name = $_POST['i_role_name'];

    $insests = "INSERT INTO roles(role_name)  
    VALUES('$role_name')";
    $query = $con->query($insests);
    if ($query) {
        echo "Success";
    } else {
        echo "failed";
    }
}
//Role Section  End <<================================>>

//Sales Order Section  Start <<================================>>
if (isset($_POST['create_order'])) {
    //function defination
    function insertToSalesOrder($con, $customerId, $productIds, $quantities)
    {
        // Inserting the Data to Sales Order Table & s_order product table
        $sql = "INSERT INTO sales_order(customer_id, sales_order_status) VALUES($customerId, 1)";

        $query = $con->query($sql);
        if ($query) {
            //Insert Data to s_order_product
            //get Sales order Id
            $sql = "SELECT * FROM sales_order WHERE sales_order_id = LAST_INSERT_ID()";
            $query = $con->query($sql);
            $data = $query->fetch_assoc();
            $salesOrderId = $data['sales_order_id'];
            foreach ($productIds as $index => $productId) {
                $quantity = $quantities[$index];
                $sql = "INSERT INTO s_order_product(sales_order_id, product_id, quantity) VALUES ($salesOrderId, $productId, $quantity)";
                $query = $con->query($sql);
                if ($query) {
                    echo "data Inserted";
                }
            }


        }
    }

    //updating the Sales Order Table
    if (!empty(($_POST['customer_phone'])) && isset($_POST['existing_customer'])) {
        //retrive Customer ID
        $customerPhone = $_POST['customer_phone'];
        $productIds = $_POST['productId'];
        $quantities = $_POST['quantity'];
        $sql = "SELECT * FROM customers WHERE customer_phone = '$customerPhone'";
        $query = $con->query($sql);
        if ($query) {
            if ($query->num_rows === 1) {
                $data = $query->fetch_assoc();
                $customerId = $data['customer_id'];
                //function insert
                insertToSalesOrder($con, $customerId, $productIds, $quantities);
            }
        }
    } else if (!isset($_POST['productId'])) {
        echo "No product is selected";

    } else if (empty($_POST['customer_phone'])) {
        echo "Enter Customer Info";
    } else if (!empty($_POST['customer_name']) && !empty($_POST['customer_email'])) {
        //New Customer Query and previous sales order and s_order product data insert
        $customerPhone = $_POST['customer_phone'];
        $customerName = $_POST['customer_name'];
        $customerEmail = $_POST['customer_email'];
        $customerAddress = $_POST['customer_address'] ?? null;

        $sql = "INSERT INTO customers(customer_phone, customer_name, customer_email, customer_address, customer_status) VALUES ('$customerPhone', '$customerName', '$customerEmail', '$customerAddress',1)";
        $query = $con->query($sql);
        if ($query) {
            //Retriving inserted customer id
            $sql = "SELECT * FROM customers WHERE customer_id = LAST_INSERT_ID()";
            $query = $con->query($sql);
            $data = $query->fetch_assoc();
            $customerId = $data['customer_id'];
            $productIds = $_POST['productId'];
            $quantities = $_POST['quantity'];
            insertToSalesOrder($con, $customerId, $productIds, $quantities);


        }

    } else {
        echo "Customer info is Incomplete";
    }


}
//Sales Order Section  End <<================================>>


















































?>