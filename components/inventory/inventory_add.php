<!-- Inventory Header -->
<section class="dashboard">
    <h1 class="heading">Add New Product</h1>
</section>

<!-- Update Product -->
<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Product Details</h3>
            <input type="text" placeholder="Enter The Product Name" name="product_name" class="box">
            <input type="text" placeholder="Enter The Product Category" name="category" class="box">
            <input type="number" placeholder="Enter Product Quantity" name="product_quantity" class="box">
            <input type="submit" class="btn" name="add_product" value="Add Product">
            <a href="admin_inventory.php" class="btn">go back!</a>
        </form>
    </div>
</div>