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
            include '../components/header_nurse.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Inventory List</h1>

            <!-- Inventory Add New Product -->
            <div class="box-container">
                <div class="box">
                    <h3>ADD A NEW PRODUCT</h3>
                    <a href="nurse_inventory_add.php" class="btn">Add Product</a>
                </div>
            </div>
        </section>

        <!-- Product List -->
        <div class="container">
            <?php
                $select = mysqli_query($con, "SELECT * FROM inventory ORDER BY name ASC");
            ?>

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
                    
                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
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
                                <a href="nurse_inventory_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                                <a href="nurse_inventory.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>

        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
