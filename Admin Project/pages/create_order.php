<?php
require_once("./../includes/db_connection.php");
require_once("./../includes/functions.php");
$limit = 10;
$sql = "SELECT * FROM product_information WHERE product_status = 1 ORDER BY product_id DESC LIMIT $limit";

$result = $con->query($sql);

?>

<div class="split">
    <div class="" id="split-0">
        <div class="form-body container">
            <h4>Create Order</h4>
            <h5 style="text-align:right; font-size: 16px" id="customer_match_count"></h5>
            <form action="">
                <div class=" row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Search by Customer Phone:</label>
                            <input class="form-control customer_phone" type="text" placeholder="Enter Customer Phone"
                                name="customer_phone">
                        </div>
                        <div class="form-group">
                            <label for="">Customer ID:</label>
                            <input class="form-control" type="text" placeholder="ID will be loaded" disabled
                                name="customer_id">
                        </div>
                    </div>
                    <div class="col-md-6 resizeable">
                        <div class="form-group">
                            <label for="">Customer Name:</label>
                            <input class="form-control" type="text" placeholder="Name will be loaded" disabled
                                name="customer_name">
                        </div>
                        <div class="form-group">
                            <label for="">Customer Email:</label>
                            <input class="form-control" type="text" placeholder="Email will be loaded" disabled
                                name="customer_email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Customer Address:</label>
                    <input class="form-control" type="text" placeholder="Address will be loaded" disabled
                        name="customer_address">
                </div>
                <div class="form-group">
                    <label for="">Sales Order</label><br>
                    <div class="product_container">

                        <div class="table-responsive">
                            <table id="sales_order_table">
                                <tr>
                                    <th>SKU</th>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>X</th>
                                </tr>
                                <!-- Will add products via Javascript -->
                            </table>
                            <div
                                style="text-align: right;background-color: var(--secondary-color); color:white; padding: 2px 10px">
                                <h5 id="sub_total">Sub Total: 00.00 Tk.</h5>
                            </div>
                        </div>
                    </div>
                    <!-- <button style="text-align: right;" class="btn btn-success" id="addProductBtn"><i
                            class="fa-solid fa-plus"></i></button> -->
                </div><br>
                <input type="hidden" name="create_order">
                <input type="submit" class="mybtn-hightlight btn" value="Create Order">
            </form>
            <div id="response"></div>
        </div>
    </div>
    <div class=" p-4 split-1" id="split-1" style="background: #f1f1f1;">
        <input class="form-control" type="text" id="product_search" placeholder="Search Products">
        <h3 class="text-center m-3">All Products</h3>
        <div class="products_group text-center" style="overflow: scroll; height: 71vh">
            <?php while ($data = $result->fetch_assoc()) {
                $stock = intval($data['total_stock']);
                ?>
                <div class="card product d-inline-block p-1" style="width: 10rem">
                    <div class="img_container"><img src="uploads/images/<?= $data['product_image'] ?>"
                            class="card-img-top img-fluid" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title small">
                            <?= $data['product_name'] ?>
                        </h5>
                        <h6>
                            <i class="fa-solid fa-bangladeshi-taka-sign"></i>
                            <?= $data['selling_price'] ?>
                        </h6>
                        <h6 style="font-size:14px; color:grey">
                            Stock:
                            <?= $stock ?>
                            <?= $data['unit_name'] ?>
                        </h6>

                        <button class="add_product btn d-block mx-auto w-100 mybtn-hightlight"
                            value="<?= $data['product_id'] ?>" data-sku="<?= $data['sku'] ?>"
                            data-sellingPrice="<?= $data['selling_price'] ?>">ADD</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>