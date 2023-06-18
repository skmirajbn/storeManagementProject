<?php 
require_once('./../includes/db_connection.php');
if(isset($_GET['subCategory_id'])){
  $subCategoryId = $_GET['subCategory_id'];
}
//Categories Data retriving
$sql = "SELECT * FROM categories";
$cat_result = $con->query($sql);

//Retriving Sub Category list
$sql = "SELECT * FROM sub_categoreis"

?>

<div class="container" style="width: 80%; margin: 0 auto;">
  <h4>Add Sub Category</h4>
  <form id="addSubCategory">
    <div class="form-group">
      <label for="category">Category:</label>
      <select class="form-control" id="category" name="categoryId">
        <option value="" disabled>Select Category</option>
        <?php while($data = $cat_result->fetch_assoc()){ ?>
        <option <?=$data['category_id'] == $subCategoryId ? "active": "" ?> value="<?=$data['category_id']?>"><?=$data['category_name']?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="subCategoryName">Sub Category Name:</label>
      <input class="form-control" type="text" id="subCategoryName" name="subCategoryName" placeholder="Enter Sub Category Name">
    </div>
    <br>
    <input type="hidden" name="addSubCategory">
    <input type="submit" class="btn mybtn-hightlight" value="Add SubCategory">
  </form>
  <div id="response"></div>
</div>