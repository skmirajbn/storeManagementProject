<?php
    require_once("../includes/db_connection.php");
    $sql="SELECT * FROM customers WHERE customer_status = 1 ORDER BY customer_id DESC";
    $query=$con->query($sql);
?>
<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th><input type="checkbox" class="select-all"></th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($data=$query->fetch_assoc()){
            ?>
            <tr>
                <td><input type="checkbox" class="select"></td>
                <td><?= $data["customer_id"]?></td>
                <td><?= $data["customer_name"]?></td>
                <td><?= $data["customer_phone"]?></td>
                <td><?= $data["customer_email"]?></td>
                <td><?= $data["customer_address"]?></td>
                <td>
                    <a href="pages/update_customer.php?customer_id=<?= $data["customer_id"]?>"
                        data-form="updateCustomer" class=" btn edit-btn ">Edit</a>
                    <a href="formServer.php?customer_id=<?= $data["customer_id"]?>" class=" btn delete-btn ">Delete</a>
                </td>
            </tr>
            <?php }?>

            <!-- Add more rows for each user -->
        </tbody>
    </table>
</div>