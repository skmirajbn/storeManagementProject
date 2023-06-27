<?php
require_once("./../includes/db_connection.php");
// require_once("./../includes/functions.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $limit = 10;
    $sql = "SELECT * FROM product_information WHERE product_name LIKE '%$search%' OR sku LIKE '%$search%' OR category_name LIKE '%$search%' LIMIT $limit";

    $result = $con->query($sql);
    $productsData = [];

    while ($data = $result->fetch_assoc()) {
        $productsData[] = $data;
    }

    $jsonData = json_encode($productsData);
    echo $jsonData;
}
?>