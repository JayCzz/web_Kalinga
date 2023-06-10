<?php 
    session_start();

    include '../components/connection.php';
	include '../components/functions.php';

	$user_data = check_login($con);
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
            include '../components/header_doctor.php'; 
        ?>

        <!-- Inventory Header -->
<section class="dashboard">
    <h1 class="heading">Inventory List</h1>
</section>

<div class="container">
    <div class="product-display">
        <table class="product-display-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Available Stock (per pcs)</th>
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
                </tr>
            <?php 
                    }
                }
            ?>
        </table>
    </div>
</div>

        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
