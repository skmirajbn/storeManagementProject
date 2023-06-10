<?php
    require_once("includes/db_connection.php");
    $id=$_GET['id'];
    $sql="SELECT * From customers WHERE customer_id='$id'";
    $query=$con->query();
    $data=$query->fetch_assoc();

    if(isset($_POST['updateCustomer'])){
        $name=$_POST["customer_name"];
        $address=$_POST["customer_address"];
        $phone=$_POST["customer_phone"];
        $email=$_POST["customer_email"];
        $sql="UPDATE FROM customers(customer_name='$name', customer_address='$address',customer_phone='$phone', customer_email='$email')";
        $query=$con->query($sql);
        if($query){
            header("Location:all_customers.php");
        }else{
            echo "Note Update";
        }
    }


?>

<div class="form-body container" style="width: 80%; margin:0 auto">
        <h4>Add Customer</h4>
        <form id="updateCustomer" method="post">
            <div class="form-group">
                <label for="">Customer Name:</label>
                <input class="form-control" name="customer_name" type="text" placeholder="Enter Customer Name" value="<?= $data['customer_name']?>">
            </div>
            <div class="form-group">
                <label for="">Customer address:</label>
                <input class="form-control" name="customer_address" type="text" placeholder="Enter Customer Address" value="<?= $data['customer_address']?>">
            </div>
            <div class="form-group">
                <label for="">Customer Phone:</label>
                <input class="form-control" name="customer_phone" type="text" placeholder="Enter Customer Phone" value="<?= $data['customer_phone']?>">
            </div>
            <div class="form-group">
                <label for="">Customer Email:</label>
                <input class="form-control" name="customer_email" type="text" placeholder="Enter Customer Phone" value="<?= $data['customer_email']?>">
            </div>
            <br>
            <input type="hidden" name="updateCustomer">
            <input type="submit" class="mybtn-hightlight btn" value="Add Customer">
        </form>
        <div id="response"></div>
    </div>