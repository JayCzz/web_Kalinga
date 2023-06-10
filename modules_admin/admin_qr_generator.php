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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Code Generator</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_qr_generator.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- QR Code Generator -->
        <section class="dashboard">
            <h1 class="heading">QR Code Generator</h1>
                <div class="generator">
                    <div class="wrapper">
                        <div class="headers">
                            <h1>QR Code Generator</h1>
                            <p>Paste a url or enter text to create QR code</p>
                        </div>
                        
                        <div class="form">
                            <input type="text" spellcheck="false" placeholder="Enter text or url">
                            <button>Generate QR Code</button>
                        </div>
                        
                        <div class="qr-code">
                            <img src="" alt="qr-code">
                        </div>
                    </div>
                </div>
        </section>

        <!-- QR Code Generator js file link -->
        <script src="../js/qr_generator.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>