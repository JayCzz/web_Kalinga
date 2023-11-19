<?php 
	session_start();

	include '../connection.php';
	include '../functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/verification_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <title>Account Recovery</title>
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <span>Account Recovery</span>
                </div>
                
                <p>To help keep your account safe. Kalinga wants to make sure that it's really you trying to sign in.</p>
                
                <form action="../../action/forget_password.php" method="POST">
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    
                    <div class="row button">
                        <input type="submit" name="confirm_email" value="Confirm">
                    </div>
                </form>
            </div>
        </div>

	    <!-- sweetalert cdn file link -->
        <script src="../../js/sweetalert.min.js"></script>
        <?php include '../../includes/message.php'; ?>
    </body>
</html>