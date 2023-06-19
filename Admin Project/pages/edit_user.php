<?php
require_once("../includes/db_connection.php");
$id=$_GET['user_id'];
$sql="SELECT * From users WHERE user_id='$id'";
$query=$con->query($sql);
$data=$query->fetch_assoc();

?>

<div class="container" style="width: 80%; margin: 0 auto;">
  <h4>Update Users</h4>
  <form method="post">
    <div class="form-group">
      <label for="">Name:</label>
      <input class="form-control" type="text" name='i_user_name' value="<?= $data['user_name']?>">
    </div>
    <div class="form-group">
      <label for="">User Name:</label>
      <input class="form-control" type="text" name='i_user_username' value="<?= $data['user_name']?>">
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input class="form-control" type="text" name='i_user_email' value="<?= $data['user_name']?>">
    </div>
    <div class="form-group">
      <label for="">Phone:</label>
      <input class="form-control" type="text" name='i_user_phone' value="<?= $data['user_name']?>">
    </div>
    <div class="form-group">
      <label for="category">User Role:</label>
      <select class="form-control" id="category" name='i_user_role'>
        <option value="">---Select Role---</option>
        <?php
          $sel="SELECT * FROM roles ORDER BY role_id='ASC'";
          $query=mysqli_query($con,$sel);
          while($data=mysqli_fetch_assoc($query)){
          ?>
        <option value="<?= $data['role_id']; ?>"><?= $data['role_name']; ?></option>
        <?php } ?>
      </select>
      </select>
    </div>
    <div class="form-group">
      <label for="">Photo:</label>
      <input class="form-control" type="file" name='i_user_photo' value="<?= $data['user_name']?>">
    </div>
    <br>
    <input type="hidden" name="add_user" value="<?=$id?>">
    <input type=" submit" class="btn mybtn-hightlight" value="Update">
  </form>
  <div id="response"></div>
</div>
</div>