<?php 
    session_start();

    include 'components/connection.php';
	include 'components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_product'])) {
    
        $product_name = $_POST['product_name'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_qr/'.$product_image;
    
        if(empty($product_name) || empty($product_image)) {
            $warning_msg[] = 'please fill out all';
        }
        
        else {
            $update_data = "UPDATE qr_code SET name='$product_name', image='$product_image'  WHERE id = '$id'";
            $upload = mysqli_query($con, $update_data);

            if($upload) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                header('location:admin_qr_page.php');
            }

            else {
                $error_msg[] = 'could not add the QR';
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
        <link rel="stylesheet" href="css/qr.css">
    </head>

    <body>
        <?php
            include 'components/header_admin.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Update QR Code</h1>
        </section>

        <!-- Add Product -->
        <div class="container">
            <div class="admin-product-form-container">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM qr_code  WHERE id = '$id'");
                    while($row = mysqli_fetch_assoc($select)){
                ?>

                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">update the product</h3>
                    <h3 class="title">update the qr</h3>
                    <input type="text" class="box" name="product_name" value="<?php echo $row['name']; ?>" placeholder="enter the product name">
                    <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
                    <input type="submit" value="update QR" name="update_product" class="btn">
                    <a href="admin_qr_page.php" class="btn">go back!</a>
                </form>
                
                <?php }; ?>
            </div>
        </div>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

		<?php include 'components/message.php'; ?>
    </body>
</html>