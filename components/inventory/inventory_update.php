<!-- Inventory Header -->
<section class="dashboard">
    <h1 class="heading">Update Product</h1>
</section>

<!-- Product Update -->
<div class="container">
    <div class="admin-product-form-container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="title">Product Details</h3>
            <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>"placeholder="Enter The Product Name">
            <input type="text" class="box" name="category" value="<?php echo $row['type']; ?>"placeholder="Enter The Product Type">
            <input type="number" min="0" class="box" name="product_quantity" value="<?php echo $row['quantity']; ?>" placeholder="Enter The Product Quantity">
            <input type="submit" value="update Product" name="update_product" class="btn">
            <a href="admin_inventory.php" class="btn">go back!</a>
        </form>
    </div>
</div>