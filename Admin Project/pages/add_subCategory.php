<?php 
$content = <<<HTML
<div class="container" style="width: 80%; margin: 0 auto;">
                <h4>Add Sub Category</h4>
                <form action="">
                  <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category">
                      <option value="" selected disabled>Select Category</option>
                      <option value="">Phones</option>
                      <option value="">Grocery</option>
                      <option value="">Vegetables</option>
                      <option value="">TV</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="subCategoryName">Sub Category Name:</label>
                    <input class="form-control" type="text" id="subCategoryName" placeholder="Enter Sub Category Name">
                  </div>
                  <br>
                  <input type="submit" class="btn mybtn-hightlight" value="Add SubCategory">
                </form>
            </div>
HTML;
echo $content;
?>