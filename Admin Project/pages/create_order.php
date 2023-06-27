<?php
require_once("./../includes/db_connection.php");
$limit = 10;
$sql = "SELECT * FROM product_information ORDER BY product_id DESC LIMIT $limit";

$result = $con->query($sql);

?>

<div class="row">
    <div class="col-md-6">
        <div class="form-body container">
            <h4>Create Order</h4>
            <form action="">
                <div class=" row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Customer ID:</label>
                            <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Name:</label>
                            <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Customer Phone:</label>
                            <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Email:</label>
                            <input class="form-control" type="text" placeholder="Enter Customer Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Customer Address:</label>
                    <input class="form-control" type="text" placeholder="Enter Customer Name">
                </div>
                <div class="form-group">
                    <label for="">Product</label><br>
                    <div class="product_container">
                        <div class="product_entry">
                            <label for="sku1">SKU:</label>
                            <input style="display: inline-block;width: 100px;" class="form-control sku-input"
                                type="text" placeholder="SKU" id="sku1" name="sku[1]">
                            <label for="product1">Name:</label>
                            <input style="display: inline-block;width: 250px;" class="form-control product-input"
                                type="text" placeholder="Enter Product Name" id="product1" name="product[1]">
                            <label for="quantity1">Quantity :</label>
                            <input style="display: inline-block;width: 100px;" class="form-control" type="text"
                                placeholder="Quantity" id="quantity1"> <span>&nbsp; &nbsp;</span>
                            <span
                                style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">Stock:
                                --</span>
                            <span
                                style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">--</span>
                            <span style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">Per
                                pc:
                                --</span>
                            <span
                                style="display:inline-block; background: #f1f1f1;margin-right:10px; padding:7px">Total:
                                --</span>
                            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </div>
                    </div><br>
                    <button style="text-align: right;" class="btn btn-success" id="addProductBtn"><i
                            class="fa-solid fa-plus"></i></button>
                </div><br>
                <input type="submit" class="mybtn-hightlight btn">
            </form>
        </div>
    </div>
    <div class="col-md-6 p-4" style="background: #f1f1f1;">
        <input class="form-control" type="text" id="product_search" placeholder="Search Products">
        <h3 class="text-center m-3">All Products</h3>
        <div class="products_group text-center" style="overflow: scroll; height: 71vh">
            <?php while ($data = $result->fetch_assoc()) { ?>
                <div class="card product d-inline-block p-1" style="width: 10rem">
                    <div class="img_container"><img src="uploads/images/<?= $data['product_image'] ?>"
                            class="card-img-top img-fluid" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title small">
                            <?= $data['product_name'] ?>
                        </h5>
                        <button class="btn d-block mx-auto w-100 mybtn-hightlight"
                            value="<?= $data['product_id'] ?>">ADD</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>