<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Live Queueing</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_queueing.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Queueing -->
        <section class="dashboard">
            <h1 class="heading">Live Queueing</h1>
            <div class="box-container slim">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM queue_list  WHERE status = 'Active' AND type = 'Medical' ORDER BY qnumber ASC");
                    if (mysqli_num_rows($select) == 1) {
                        while ($row = mysqli_fetch_assoc($select)) {
                ?>

                <div class="box">
                    <h3>Consulting Now</h3>
                    <p>Medical</p>
                    <a href="#" type="submit" name="add_product" class="btn"><?php echo $row['queue_id'];  ?></a>
                </div>

                <?php
                        }
                    } 
                    else {
                ?>

                <div class="box">
                    <h3>Consulting Now</h3>
                    <p>Medical</p>
                    <a href="#" class="btn"><?php echo 'None'; ?></a>
                </div>

                <?php
                    }
                ?>

                <?php
                    $select = mysqli_query($con, "SELECT * FROM queue_list  WHERE status = 'Active' AND type = 'Dental' ORDER BY qnumber ASC");
                    if (mysqli_num_rows($select) == 1) {
                        while ($row = mysqli_fetch_assoc($select)) {
                ?>

                <div class="box">
                    <h3>Consulting Now</h3>
                    <p>Dental</p>
                    <a href="#" type="submit" name="add_product" class="btn"><?php echo $row['queue_id'];  ?></a>
                </div>

                <?php
                        }
                    } 
                    else {
                ?>

                <div class="box">
                    <h3>Consulting Now</h3>
                    <p>Dental</p>
                    <a href="#" class="btn"><?php echo 'None'; ?></a>
                </div>

                <?php
                    }
                ?>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>