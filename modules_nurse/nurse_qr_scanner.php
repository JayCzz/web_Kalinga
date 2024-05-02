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
    <title>QR Code Scanner</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/admin_qr_scanner.css">
</head>

<body>
    <!-- header section starts -->
    <?php
    include '../components/header_nurse.php';
    ?>

    <!-- QR Code Scanner -->
    <?php
    include '../components/qr_scanner.php';
    ?>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
</body>

</html>