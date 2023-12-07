<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM qr_code WHERE id = $id");
        header('location:nurse_qr_page.php');
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Page List</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/qr.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">QR Code List</h1>

            <!-- Inventory Add New Product -->
            <div class="box-container">
                <div class="box">
                    <h3>ADD A NEW QR</h3>
                    <a href="nurse_qr_page_add.php" class="btn">Add QR</a>
                </div>
            </div>
        </section>

        <!-- Product List -->
        <div class="container">
            <?php
                $select = mysqli_query($con, "SELECT * FROM qr_code ORDER BY name ASC");
            ?>

            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                        <tr>
                            <th>QR Code</th>
                            <th>ID Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    <?php while($row = mysqli_fetch_assoc($select)){ ?>
                        <tr>
                            <td>
                                <img src="../uploaded_qr/<?php echo $row['image']; ?>" height="100" alt="">
                            </td>

                            <td>
                                <?php echo $row['name']; ?>
                            </td>

                            <td>
                                <a href="nurse_qr_page_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                                <a href="nurse_qr_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
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
