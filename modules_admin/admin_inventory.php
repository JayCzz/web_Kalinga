<?php 
    session_start();

    include '../components/connection.php';
	include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM inventory WHERE id = $id");
        header('location:admin_inventory.php');
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
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Inventory List -->
        <?php
            include '../components/inventory/inventory_list.php'; 
        ?>
        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
