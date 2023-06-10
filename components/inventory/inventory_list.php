<!-- Inventory Header -->
<section class="dashboard">
    <h1 class="heading">Inventory List</h1>

    <!-- Inventory Add New Product -->
    <div class="box-container">
        <div class="box">
            <h3>ADD A NEW PRODUCT</h3>
            <a href="admin_inventory_add.php" class="btn">Add Product</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Available Stock (per pcs)</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php if(isset($_POST['submit'])) {
                $search_item = $_POST['search'];
                $select_users = mysqli_query($con, "SELECT * FROM `inventory` WHERE name LIKE '%{$search_item}%' ORDER BY name ASC") or die('query failed');
                    if(mysqli_num_rows($select_users) > 0) { 
                        while($row = mysqli_fetch_assoc($select_users)) { 
            ?>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>

                    <td>
                        <?php echo $row['type']; ?>
                    </td>

                    <td>
                        <?php echo $row['quantity']; ?>
                    </td>

                    <td>
                        <a href="admin_inventory_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                        <a href="admin_inventory.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                    </td>
                </tr>
            <?php
                        }
                    }
                    else {
                        echo '<td colspan="4" class="empty">no result found!</td>';
                    }
                } 
                else { 
            ?>
            <?php $select = mysqli_query($con, "SELECT * FROM inventory ORDER BY name ASC");
                while($row = mysqli_fetch_assoc($select)) { 
            ?>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>

                    <td>
                        <?php echo $row['type']; ?>
                    </td>

                    <td>
                        <?php echo $row['quantity']; ?>
                    </td>

                    <td>
                        <a href="admin_inventory_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                        <a href="admin_inventory.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                    </td>
                </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </div>
</div>