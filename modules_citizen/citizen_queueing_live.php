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

    <!-- Icon -->
    <link rel="icon" href="img/brgylogoreal.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- google fonts link  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/citizen_queueing_live.css">
</head>

<body>
    <!-- Admin Header -->
    <?php
    include '../components/header_citizen.php';
    ?>

    <!-- QR Code Menu -->
    <section class="dashboard">
        <h1 class="heading">Live Queueing</h1>

        <div class="box-container">

            <div class="box">
                <h3>Medical Consultation Live Queueing</h3>
                <a href="admin_queueing_window_medical.php" class="btn">Open Medical Consultation Live Queueing</a>
            </div>
        </div>

        <br>
        <br>

        <div class="box-container">
            <div class="box">
                <h3>Dental Consultation Live Queueing</h3>
                <a href="admin_qr_generator.php" class="btn">Open Dental Consultation Live Queueing</a>
            </div>
        </div>

    </section>



    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
</body>

</html>