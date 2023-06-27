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
        <input class="form-control" type="text" placeholder="Search Products">
        <h3 class="text-center m-3">All Products</h3>
        <div class="products_group text-center" style="overflow: scroll; height: 71vh">
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>
            <div class="card product d-inline-block p-1" style="width: 10rem;">
                <img src="uploads/images/product_1687791994_67629988.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title small">22 Inch Monitor</h5>
                    <button class="btn d-block mx-auto w-50 mybtn-hightlight">ADD</button>
                </div>
            </div>


        </div>
    </div>
</div>