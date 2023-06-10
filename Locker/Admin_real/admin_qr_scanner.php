<?php 
    session_start();

    include 'components/connection.php';
	include 'components/functions.php';

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
        <link rel="stylesheet" href="css/admin_qr_scanner.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include 'components/header_admin.php'; 
        ?>

        <!-- QR Code Scanner -->
        <section class="dashboard">
            <h1 class="heading">QR Code Scanner</h1>
            <div class="scanner">
                <div class="wrapper">
                    <form action="#" class="form">
                        <input type="file" hidden>
                        <img src="#" alt="qr-code">
                        <div class="content">
                            <i class="fas fa-cloud-upload"></i>
                            <p>Upload QR Code to Read</p>
                        </div>
                    </form>

                    <div class="details">
                        <textarea spellcheck="false" disabled></textarea>
                        <div class="buttons">
                            <button class="close">Close</button>
                            <button class="copy">Copy Text</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- QR Code Scanner js file link -->
        <script src="js/qr_scanner.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>    
    </body>
</html>