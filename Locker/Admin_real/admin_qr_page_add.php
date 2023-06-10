<?php 
    session_start();

    include 'components/connection.php';
	include 'components/functions.php';

	$user_data = check_login($con);

    if(isset($_POST['add_product'])) {

        $product_name = $_POST['product_name'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_qr/'.$product_image;
    
        if(empty($product_name) || empty($product_image)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO qr_code(name, image) VALUES('$product_name', '$product_image')";
            $upload = mysqli_query($con,$insert);
        
            if($upload) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                header('location:admin_qr_page.php');
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
        <link rel="stylesheet" href="css/qr.css">
    </head>

    <body>
        <?php
            include 'components/header_admin.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Add QR Code</h1>
        </section>

        <!-- Product Update -->
        <div class="container">
            <div class="admin-product-form-container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>add a new qr</h3>
                    <input type="text" placeholder="Enter ID Number" name="product_name" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn" name="add_product" value="Add QR">
                    <a href="admin_qr_page.php" class="btn">go back!</a>
                </form>
            </div>
        </div>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>

		<?php include 'components/message.php'; ?>
    </body>
</html>