<?php
require_once("../includes/db_connection.php")

  $id=$_GET['product_id'];
  $sql="SELECT * from products WHERE product_id=$id ";
  $query=$con->query($sql);
  $show_data=$query->fetch_assoc();
?>

<div class="main_content">
  <div class="form-body container" style="width: 80%; margin:0 auto">
    <h4>Add Product</h4>
    <form id="addProduct" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Product Name:</label>
        <input class="form-control" name="product_name" type="text" placeholder="Enter Customer Name" value="<?= $show_data['product_name'] ?>">
      </div>
      <div class="form-group">
        <label for="">Brand:</label>
        <select class="form-control" name="product_brand" id="">
          <option value=""><?= $show_data['brand_id'] ?></option>
          <?php 
              $sql="SELECT * from brands ORDER BY brand_id ASC";
              $query=$con->query($sql);
              while($data=$query->fetch_assoc()){
              ?>
          <option value="<?= $data['brand_id'] ?>"><?= $data['brand_name'] ?></option>
          <?php }?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Category:</label>
        <select class="form-control" name="product_category" id="">
          <option value=""><?= $show_data['category_id'] ?></option>
          <?php
              $sql="SELECT * FROM categories ORDER BY category_id ASC";
              $query= $con->query($sql);
              while($data=$query->fetch_assoc()){
            ?>
          <option value="<?= $data['category_id']?>"><?= $data['category_name']?></option>
          <?php } ?>

        </select>
      </div>
      <div class="form-group">
        <label for="">Unit:</label>
        <select class="form-control" name="product_unit" id="">
          <option value=""><?= $show_data['unit_id'] ?></option>
          <?php
            $sql="SELECT * FROM unit";
            $query=$con->query($sql);
            while($data=$query->fetch_assoc()){
          ?>
          <option value="<?= $data["unit_id"] ?>"><?= $data["unit"] ?></option>

          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">SKU:</label>
        <input class="form-control" name="product_sku" type="text" placeholder="Enter Product SKU" value="<?= $show_data['sku'] ?>">
      </div>
      <div class="form-group">
        <label for="">Price:</label>
        <input class="form-control" name="product_price" type="text" placeholder="Enter Customer Name" value="<?= $show_data ['selling_price'] ?>">
      </div>
      <div class="form-group">
        <label for="">Product Image:</label>
        <input class="form-control" name="product_image" type="file" placeholder="Enter Customer Name" >
      </div>
      <div class="form-group">
        <label for="">Description:</label>
        <textarea class="form-control" placeholder="Enter Customer Name" name="product_desc" id="" cols="" rows=""><?=$show_data['description'] ?></textarea>
      </div>
      <br>
      <input type="hidden" name="updateProduct">
      <input type="submit" class="mybtn-hightlight btn">
    </form>
    <div id="response"></div>
  </div>
</div>