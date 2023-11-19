<?php 
	session_start();

	include '../connection.php';
	include '../functions.php';

    $activation_code = $_GET['code'];

    $query = "SELECT * FROM users WHERE activation_code = '$activation_code'";
    $result = mysqli_query($con, $query);
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
                
                <form action="../../action/new_password.php" method="POST">
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>" readonly>
                    </div>
                <?php
                    };
                ?>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="New Password" required>
                    </div>

                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    
                    <div class="row button">
                        <input type="submit" name="confirm_password" value="Confirm">
                    </div>
                </form>
            </div>
        </div>

	    <!-- sweetalert cdn file link -->
        <script src="../../js/sweetalert.min.js"></script>
        <?php include '../../includes/message.php'; ?>
    </body>
</html>