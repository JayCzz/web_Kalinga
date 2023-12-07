<?php
session_start();

include 'components/connection.php';
include 'components/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor | Login</title>

    <!-- Vendors -->
    <link rel="icon" href="img/brgylogoreal.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- google fonts link  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login_style.css">
</head>

<body>
    <section class="side"></section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>

            <form class="login-form" action="action/login.php" method="post">
                <div class="form-control">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class="fas fa-user"></i>
                </div>

                <div class="form-control">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class="fas fa-lock"></i>
                </div>

                <a href="components/forgot_password/confirm_email.php" class="forgot-password">Forgot Password</a>

                <button class="submit" type="submit" name="doctor_login">Login</button>
                <div class="signup-link">Not a member? <a href="doctor_signup.php">Signup now</a></div>
            </form>
        </div>
    </section>

    <!-- sweetalert cdn file link -->
    <script src="js/sweetalert.min.js"></script>
    <?php include 'includes/message.php'; ?>
</body>

</html>