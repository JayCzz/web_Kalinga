<?php 
    session_start();

    include '../components/connection.php';
	include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM users WHERE id = $id");
        header('location:nurse_users_page.php');
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staffs</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/inventory.css">
    </head>

    <body>
        <!-- doctor Header -->
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Admin List</h1>

            <!-- Product List -->
            <div class="container">

                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $select = mysqli_query($con, "SELECT * FROM admin ORDER BY firstName ASC") or die('query failed');
                            if(mysqli_num_rows($select) > 0) { 
                                while($row = mysqli_fetch_assoc($select)) { 
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row['type']; ?>
                                </td>

                                <td>
                                    <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>
                                </td>

                                <td>
                                    <a href="nurse_users_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>
                            <?php 
                                    }
                                }
                            ?>
                    </table>
                </div>
            </div>
        </section>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Doctor List</h1>

            <!-- Product List -->
            <div class="container">

                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $select = mysqli_query($con, "SELECT * FROM doctor ORDER BY firstName ASC") or die('query failed');
                            if(mysqli_num_rows($select) > 0) { 
                                while($row = mysqli_fetch_assoc($select)) { 
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row['type']; ?>
                                </td>

                                <td>
                                    <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>
                                </td>

                                <td>
                                    <a href="nurse_users_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>
                            <?php 
                                    }
                                }
                            ?>
                    </table>
                </div>
            </div>
        </section>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Nurse List</h1>

            <!-- Product List -->
            <div class="container">

                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php $select = mysqli_query($con, "SELECT * FROM nurse ORDER BY firstName ASC") or die('query failed');
                            if(mysqli_num_rows($select) > 0) { 
                                while($row = mysqli_fetch_assoc($select)) { 
                        ?>
                            <tr>
                                <td>
                                    <?php echo $row['type']; ?>
                                </td>

                                <td>
                                    <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>
                                </td>

                                <td>
                                    <a href="nurse_users_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                                </td>
                            </tr>
                            <?php 
                                    }
                                }
                            ?>
                    </table>
                </div>
            </div>
        </section>

        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>