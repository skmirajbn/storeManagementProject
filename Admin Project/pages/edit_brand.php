<!-- Button trigger modal -->
<?php 
require_once("../includes/db_connection.php");
    if(isset($_GET['brand_id'])){
      $id=$_GET['brand_id'];
      $sql="SELECT * FROM brands WHERE brand_id=$id";
      $viewquery=$con->query($sql);
      $viewdata= $viewquery->fetch_assoc();
    }
    // if(isset($_POST['editBrand'])){
    //   $brandName=$_POST['brandName'];
    //   $sql="UPDATE brands SET brand_name='$brandName' WHERE brand_id='$id'";
    //   $query=$con->query($sql);
    //   if($query){
    //     echo "Data Upload Successful";
    //   }else{
    //     echo "Data Upload Failed";
    //   }
    // }
?>
<div class="form-body container" style="width: 80%; margin:0 auto">
  <form id="editbrand">
    <div class="form-group">
      <label for="">Brand Name:</label>
      <input class="form-control" type="text" name="brandName" value="<?= $viewdata['brand_name']?>">
    </div>
    <br>
    <input type="hidden" name="editBrand">
    <input type="submit" class="mybtn-hightlight btn" value="Add Brand">
  </form>
  <div id="response"></div>

</div> 
        
      