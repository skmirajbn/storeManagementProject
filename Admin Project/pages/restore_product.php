<div class="table-responsive">
  <table id="product_information_table">
    <thead>
      <tr>
        <th><input type="checkbox" class="select-all"></th>
        <th>ID</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Unit</th>
        <th>SKU</th>
        <th>Price</th>
        <th>Image</th>
        <th>Description</th>
        <th>Update/Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
          require_once("../includes/db_connection.php");
          $sql="SELECT * FROM product_information WHERE product_status = 0 ORDER BY product_id DESC";
          $query=$con->query($sql);
          while($data=$query->fetch_assoc()){ 
          
        ?>
      <tr>
        <td><input type="checkbox" class="select"></td>
        <td><?= $data["product_id"]?></td>
        <td><?= $data["product_name"]?></td>
        <td><?= $data["brand_name"]?></td>
        <td><?= $data["category_name"]?></td>
        <td><?= $data["unit"]?></td>
        <td><?= $data["sku"]?></td>
        <td><?= $data["selling_price"]?></td>
        <td>
          <?php if(($data['product_image'])!=''){?>
          <img height="50" src="uploads/images/<?= $data['product_image']?>" alt="Photo" />
          <?php }else{ ?>
          <img height="50" src="uploads/images/sample-product.jpg" alt="product_image" />
          <?php }?>
        </td>
        <td><?= $data["description"]?></td>
        <td>
          <a style="background-color:green; color: white; margin-right:10px"
            href="formServer.php?restore_product_id=<?= $data["product_id"]?>" class=" btn edit-btn"><i
              class="fa-solid fa-trash-can-arrow-up"></i></a>
          <a href="formServer.php?par_delete_product_id=<?= $data["product_id"]?>" class=" btn delete-btn "><i
              class="fa-solid fa-trash-can"></i></a>
        </td>
      </tr>
      <?php }?>

      <!-- Add more rows for each user -->
    </tbody>
  </table>
</div>

<div class="pagination">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>