<div class="container">
    <div class="invoice-container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h4>Store Management Project:</h4>
                <p>IDB Bhaban, Agargaon <br> Mobile: 01957244070<br>Email: skmirajbn@gmail.com<br> Salesman: Ali Hasan
                </p>
            </div>
            <div class="col-md-6 text-end">
                <h4>Customer Information:</h4>
                <p>Customer Name: John Doe <br> Address: 456, Oak Street<br>Phone: 987-654-321<br> Email:
                    john.doe@mail.com</p>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-12">
                <h2 class="text-center">Invoice</h2>
                <p class="text-center">Invoice Number: 123456789</p>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">SKU</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="path_to_product_image.jpg" alt="Product Image" width="50"></td>
                            <td>Samsung TV</td>
                            <td>SKU123</td>
                            <td>1</td>
                            <td>$500.00</td>
                        </tr>
                        <tr>
                            <td><img src="path_to_product_image.jpg" alt="Product Image" width="50"></td>
                            <td>JBL Speaker</td>
                            <td>SKU456</td>
                            <td>2</td>
                            <td>$600.00</td>
                        </tr>
                        <!-- Add more product rows here -->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-8 offset-xl-4">
                <ul class="list-unstyled">
                    <li><span class="float-start me-3">Total Amount:</span>$1,100.00</li>
                    <li><span class="float-start me-5">Discount:</span>$100.00</li>
                    <li><span class="float-start me-5">Shipping:</span>$50.00</li>
                </ul>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-8 offset-xl-4">
                <h4 class="float-end">Total: $950.00</h4>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-xl-12">
                <p class="fw-bold">Date: <span class="text-muted">23 June 2021</span></p>
                <p class="fw-bold mt-3">Signature:</p>
            </div>
        </div>


    </div>
    <div class="row mt-4">
        <div class="col-xl-12 text-center">
            <button class="btn btn-primary" onclick="window.print()">Print</button>
        </div>
    </div>
</div>