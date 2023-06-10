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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_index.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Admin Header -->
        <?php
            include '../components/dashboard.php'; 
        ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>