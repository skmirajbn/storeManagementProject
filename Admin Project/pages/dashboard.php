<?php
require_once('includes/db_connection.php');
require_once('includes/functions.php');
$sql = "SELECT COUNT(*) AS total_orders from sales_order";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$total_orders = $data['total_orders'];

$sql = "SELECT COUNT(*) AS total_products from products";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$total_products = $data['total_products'];

$sql = "SELECT COUNT(*) AS total_brands from brands";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$total_brands = $data['total_brands'];

$sql = "SELECT SUM(total_stock) AS total_stocks FROM product_stock_information";
$result = $con->query($sql);
$data = $result->fetch_assoc();
$total_stocks = $data['total_stocks'];
$total_stocks = intVal($total_stocks);


?>


<div class="container">
  <div class="row">
    <div class="col-md-4 col-xl-3">
      <div class="card bg-c-blue order-card">
        <div class="card-block">
          <h6 class="m-b-20">Total Orders</h6>
          <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>
              <?= $total_orders ?>
            </span></h2>
          <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xl-3">
      <div class="card bg-c-green order-card">
        <div class="card-block">
          <h6 class="m-b-20">Total Products</h6>
          <h2 class="text-right"><i class="fa-solid fa-cart-flatbed-suitcase"></i><span>
              <?= $total_products ?>
            </span></h2>
          <p class="m-b-0">Completed Orders<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xl-3">
      <div class="card bg-c-yellow order-card">
        <div class="card-block">
          <h6 class="m-b-20">Brands</h6>
          <h2 class="text-right"><i class="fa-solid fa-tags"></i><span>
              <?= $total_brands ?>
            </span></h2>
          <p class="m-b-0">All Categories<span class="f-right">351</span></p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xl-3">
      <div class="card bg-c-pink order-card">
        <div class="card-block">
          <h6 class="m-b-20">Total Stock</h6>
          <h2 class="text-right"><i class="fa-solid fa-user-group"></i><span>
              <?= $total_stocks ?>
            </span></h2>
          <p class="m-b-0">Sold Item<span class="f-right">351</span></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div>
        <canvas id="reportChart"></canvas>
      </div>
    </div>
    <div class="col-md-4">
      <div>
        <canvas id="reportChart-2"></canvas>
      </div>
    </div>
  </div>
</div>