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
        <title>Family List</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/header.css">

        <!-- service css file link  -->
        <link rel="stylesheet" href="../css/service.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Family List</h1>
            
            <!-- Inventory Add New Product -->
            <div class="box-container">
                <div class="box">
                    <h3>ADD A NEW FAMILY</h3>
                    <a href="admin_service_page_add.php" class="btn">Add Family</a>
                </div>
            </div>
        </section>
        
        <section class="services" id="services">
            <h2 class = "lead">Healthcare Services</h2>

            <?php $select = mysqli_query($con, "SELECT * FROM services ORDER BY title ASC");
            if(mysqli_num_rows($select) > 0) { 
                while($row = mysqli_fetch_assoc($select)) { ?>
        
            <div class="box-container container">
                <div class="box">
                    <img src="../uploaded_service/<?php echo $row['image']; ?>" alt="">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                </div>
            </div>
        </section>

        <?php
                }
            } 
        ?>
        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
