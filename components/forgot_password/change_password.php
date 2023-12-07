<?php 
	session_start();

	include '../connection.php';
	include '../functions.php';

    $activation_code = $_GET['code'];
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
                
                <p class="note">To help keep your account safe. Kalinga wants to make sure that it's really you trying to sign in.</p>
                
                <form action="../../action/new_password.php" method="POST">
                <?php
		            // Email Exists or not in admin db
                    $admin_query = "SELECT * FROM admin WHERE activation_code = '$activation_code'";
                    $admin_result = mysqli_query($con, $admin_query);
                    while($admin_row = mysqli_fetch_assoc($admin_result))
                    {
                ?>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" value="<?php echo $admin_row['email']; ?>" readonly>
                    </div>
                <?php
                    };
                ?>
                <?php
		            // Email Exists or not in doctor db
                    $doctor_query = "SELECT * FROM doctor WHERE activation_code = '$activation_code'";
                    $doctor_result = mysqli_query($con, $doctor_query);
                    while($doctor_row = mysqli_fetch_assoc($doctor_result))
                    {
                ?>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" value="<?php echo $doctor_row['email']; ?>" readonly>
                    </div>
                <?php
                    };
                ?>
                <?php
		            // Email Exists or not in nurse db
                    $nurse_query = "SELECT * FROM nurse WHERE activation_code = '$activation_code'";
                    $nurse_result = mysqli_query($con, $nurse_query);
                    while($nurse_row = mysqli_fetch_assoc($nurse_result))
                    {
                ?>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" value="<?php echo $nurse_row['email']; ?>" readonly>
                    </div>
                <?php
                    };
                ?>
                <?php
		            // Email Exists or not in users db
                    $users_query = "SELECT * FROM users WHERE activation_code = '$activation_code'";
                    $users_result = mysqli_query($con, $users_query);
                    while($users_row = mysqli_fetch_assoc($users_result))
                    {
                ?>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" value="<?php echo $users_row['email']; ?>" readonly>
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