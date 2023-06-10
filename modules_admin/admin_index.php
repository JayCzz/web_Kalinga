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

        <!-- footer css file link  -->
        <link rel="stylesheet" href="../css/footer.css">

        <!-- footer css file link  -->
        <link rel="stylesheet" href="../css/footer.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Calendar</h1>
        
            <div class="box-container">
                <div class="box">
                    <h3>Calendar</h3>
                    <a href="schedule_admin" class="btn">View Calendar</a>
                </div>
            </div>
        </section>

        <!-- QR Code Menu -->
        <section class="dashboard">
            <h1 class="heading">QR Code Menu</h1>

            <div class="box-container">
                <div class="box">
                    <h3>Family List</h3>
                    <a href="admin_qr_page.php" class="btn">View Family List</a>
                </div>

                <div class="box">
                    <h3>QR Code Generator</h3>
                    <a href="admin_qr_generator.php" class="btn">Open QR Code Generator</a>
                </div>

                <div class="box">
                    <h3>QR Code Scanner</h3>
                    <a href="admin_qr_scanner.php" class="btn">Open QR Code Scanner</a>
                </div>
            </div>
        </section>

        <!-- Queueing Menu -->
        <section class="dashboard">
            <h1 class="heading">Queueing Menu</h1>

            <div class="box-container">
                <div class="box">
                    <h3>Live Queueing</h3>
                    <a href="admin_queueing_live.php" class="btn">View Live Queueing</a>
                </div>

                <div class="box">
                    <h3>Queueing Registration</h3>
                    <a href="admin_queueing_registration_one.php" class="btn">Open Queueing Registration</a>
                </div>

                <div class="box">
                    <h3>Queueing Window</h3>
                    <a href="admin_queueing_window.php" class="btn">Open Queueing Window</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php
            include '../components/footer.php'; 
        ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>