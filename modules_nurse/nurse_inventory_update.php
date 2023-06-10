<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_product'])) {

        $product_name = $_POST['product_name'];
        $product_quantity = $_POST['product_quantity'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = '../uploaded_img/'.$product_image;

        if(empty($product_name) || empty($product_quantity) || empty($product_image)) {
            $warning_msg[] = 'please fill out all';
        }
        
        else {
            $update_data = "UPDATE inventory SET name='$product_name', quantity='$product_quantity', image='$product_image'  WHERE id = '$id'";
            $upload = mysqli_query($con, $update_data);

            if($upload) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                header('location:nurse_inventory.php');
            }

            else {
                $error_msg[] = 'could not add the product';
            }
        }
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/inventory.css">
    </head>

    <body>
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Update Product</h1>
        </section>

        <!-- Product Update -->
        <div class="container">
            <div class="admin-product-form-container">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM inventory  WHERE id = '$id'");
                    while($row = mysqli_fetch_assoc($select)){
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">Product Details</h3>
                    <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="Enter The Product Name">
                    <input type="number" min="0" class="box" name="product_quantity" value="<?php echo $row['quantity']; ?>" placeholder="Enter The Product Quantity">
                    <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
                    <input type="submit" value="update Product" name="update_product" class="btn">
                    <a href="nurse_inventory.php" class="btn">go back!</a>
                </form>
                
                <?php }; ?>
            </div>
        </div>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>

		<?php include '../components/message.php'; ?>
    </body>
</html>