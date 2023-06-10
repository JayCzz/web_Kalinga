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
        <title>Home</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_index.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- QR Code Menu -->
        <section class="dashboard">
            <h1 class="heading">Select A Window</h1>

            <div class="box-container">
                <div class="box">
                    <h3>Medical Consultation Window</h3>
                    <a href="nurse_queueing_window_medical.php" class="btn">Open Medical Consultation Window</a>
                </div>

                <div class="box">
                    <h3>Dental Consultation Window</h3>
                    <a href="nurse_queueing_window_dental.php" class="btn">Open Dental Consultation Window</a>
                </div>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>