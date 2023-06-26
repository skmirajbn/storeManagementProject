<div class="form-body container" style="width: 80%; margin:0 auto">
    <h4>Create Order</h4>
    <form action="">
        <div class="form-group">
            <label for="">Customer ID:</label>
            <input class="form-control" type="text" placeholder="Enter Customer Name">
        </div>
        <div class="form-group">
            <label for="">Customer Name:</label>
            <input class="form-control" type="text" placeholder="Enter Customer Name">
        </div>
        <div class="form-group">
            <label for="">Customer Phone:</label>
            <input class="form-control" type="text" placeholder="Enter Customer Name">
        </div>
        <div class="form-group">
            <label for="">Product</label><br>
            <div class="product_container">
                <div class="product_entry">
                    <label for="product1">Product Name:</label>
                    <input style="display: inline-block;width: 250px;" class="form-control" type="text"
                        placeholder="Enter Product Name" id="product1" name="product[1]">
                    <label for="quantity1">Quantity :</label>
                    <input style="display: inline-block;width: 130px;" class="form-control" type="text"
                        placeholder="Enter Quantity" id="quantity1"> <span>&nbsp; &nbsp;</span>
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
            </div><br>
            <button style="text-align: right;" class="btn btn-success" id="addProductBtn"><i
                    class="fa-solid fa-plus"></i></button>
        </div><br>
        <input type="submit" class="mybtn-hightlight btn">
    </form>
</div>