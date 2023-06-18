<?php
require_once("../includes/db_connection.php");
?>

<div class="container-fluid">
  <table>
    <thead>
      <tr>
        <th><input type="checkbox" class="select"></th>
        <th>ID</th>
        <th>Name</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Number</th>
        <th>Password</th>
        <th>Role</th>
        <th>Photo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sel="SELECT * FROM users ORDER BY id DESC";
        $query=$con->query($sel);
        while($data=$query->fetch_assoc()){
      ?>
      <tr>
        <td><input type="checkbox" class="select"></td>
        <th><?= $data['user_id'] ; ?></th>
        <th><?= $data['user_name'] ; ?></th>
        <th><?= $data['user_username'] ; ?></th>
        <th><?= $data['user_email'] ; ?></th>
        <th><?= $data['user_phone'] ; ?></th>
        <th><?= $data['user_password'] ; ?></th>
        <!-- <td>Admin</td>
        <td><img class="user_img" src="uploads/images/avatar.png" alt=""></td>
        <td>
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
        </td> -->
      </tr>
      <?php } ?>
    </tbody>
  </table>
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