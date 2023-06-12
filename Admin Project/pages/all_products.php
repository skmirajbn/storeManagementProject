<div class="main_content">
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
                      require_once("includes/db_connection.php");
                      $sql="SELECT * FROM products ORDER BY product_id DESC";
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
                          <img height="50" src="uploads/<?= $data['product_image'];?>" alt="Photo"/>
                        <?php }else{ ?>
                          <img height="50" src="uploads/images/avatar.png" alt="product_image"/>
                      <?php }?>
                      </td>
                      <td><?= $data["description"]?></td>
                      <td>
                        <a href="update_product.php?product_id=<?= $data["product_id"]?>" class=" btn edit-btn ">Edit</a>
                        <a href="delete_product.php?product_id=<?= $data["product_id"]?>" class=" btn delete-btn ">Delete</a>
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
            </div>