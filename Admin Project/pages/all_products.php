<div class="table-responsive">
  <table>
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

          //pagination
            $limit = 5;
            $currentPage = $_GET['page'] ?? 1;

            $countSql = "SELECT COUNT(*) AS TOTAL FROM products";
            $result = $con->query($countSql);
            $totalRows = $result->fetch_assoc()['TOTAL'];
            $totalPage = ceil($totalRows / $limit);
            $offset = ($currentPage - 1) * $limit;

          $sql="SELECT * FROM products WHERE product_status = 1 ORDER BY product_id DESC LIMIT $offset, $limit";
          $query=$con->query($sql);
          while($data=$query->fetch_assoc()){ 
          
        ?>
      <tr>
        <td><input type="checkbox" class="select"></td>
        <td><?= $data["product_id"]?></td>
        <td><?= $data["product_name"]?></td>
        <td><?= $data["brand_id"]?></td>
        <td><?= $data["category_id"]?></td>
        <td><?= $data["unit_id"]?></td>
        <td><?= $data["sku"]?></td>
        <td><?= $data["selling_price"]?></td>
        <td>
          <?php if(($data['product_image'])!=''){?>
          <img height="50" src="uploads/<?= $data['product_image']?>" alt="Photo" />
          <?php }else{ ?>
          <img height="50" src="uploads/images/avatar.png" alt="product_image" />
          <?php }?>
        </td>
        <td><?= $data["description"]?></td>
        <td>
          <a href="pages/update_product.php?product_id=<?= $data["product_id"]?>" class=" btn edit-btn ">Edit</a>
          <a href="formServer.php?product_id=<?= $data["product_id"]?>" class=" btn delete-btn ">Delete</a>
        </td>
      </tr>
      <?php }?>

      <!-- Add more rows for each user -->
    </tbody>
  </table>
</div>

<div class="pagination">
  <a href="pages/all_products.php?page=1">&laquo;</a>
  <a href="pages/all_products.php?page=<?=$currentPage-1?>">&lt;</a>
  <?php 
    if($currentPage>2){
      $page = $currentPage - 2;
      $lastPage = $currentPage + 2;
    }else{
      $page = 1;
      $lastPage = 5;
    }
    if($lastPage>=$totalPage){
      $lastPage = $totalPage;
    }
    for($page; $page<=$lastPage; $page++){ 
  ?>
  <a href="pages/all_products.php?page=<?=$page?>" class="<?=$currentPage == $page ? 'active' : '' ?>"><?=$page?></a>
  <?php } ?>
  <a href="pages/all_products.php?page=<?=$currentPage + 1?>">&gt;</a>
  <a href="pages/all_products.php?page=<?=$totalPage?>">&raquo;</a>
</div>