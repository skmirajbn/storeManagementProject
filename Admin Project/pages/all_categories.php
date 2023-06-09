<?php 
require_once("../includes/db_connection.php");

$sql = "SELECT * FROM categories ORDER by category_id DESC";
$result = $con->query($sql);


?>

<div class="table-responsive">
                <table>
                  <thead>
                    <tr>
                      <th><input type="checkbox" class="select-all"></th>
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    while($data = $result->fetch_assoc()){
                    ?>
                    <tr>
                      <td><input type="checkbox" class="select"></td>
                      <td><?=$data['category_id']?></td>
                      <td><?=$data['category_name']?></td>
                      <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                      </td>
                    </tr>
                    <?php } ?>
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