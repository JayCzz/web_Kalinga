<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_POST['add_product'])) {

        $product_name = $_POST['product_name'];
        $category = $_POST['category'];
        $product_quantity = $_POST['product_quantity'];
    
        if(empty($product_name) || empty($product_quantity) || empty($category)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO inventory(name, quantity, type) VALUES('$product_name', '$product_quantity', '$category')";
            mysqli_query($con,$insert);
            header('location:admin_inventory.php');
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
            include '../components/header_admin.php'; 
        ?>

        <!-- Inventory Add -->
        <?php
            include '../components/inventory/inventory_add.php'; 
        ?>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>

		<?php include '../components/message.php'; ?>
    </body>
</html>