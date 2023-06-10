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
        <title>Account Profile</title>

		<!-- swiper link  -->
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/doctor_profile.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_doctor.php'; 
        ?>

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Your Profile</h1>

            <div class="info">
                <div class="user">
                    <img src="../uploaded_img/<?php echo $user_data['user_id']; ?>" alt="">
                    <h3><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                    <p>Doctor</p>
                </div>
        
                <div class="box-container slim">
                    <div class="infomenu">
                        <a href="doctor_profile_pi.php" class="infomenu-box">
                            <img src="../img/icon01.png" alt="">
                            <h3>Personal Info</h3>
                        </a>
                    </div>
                    <div class="infomenu active">    
                        <a href="doctor_profile_ai.php" class="infomenu-box">
                            <img src="../img/icon03.png" alt="">
                            <h3>Account Info</h3>
                        </a>
                    </div>
                </div>

                <div class="details">
                    <div class="rowone">
                        <h3>Username:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $user_data['username']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Email:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $user_data['email']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Phone Number:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>0<?php echo $user_data['phoneNumber']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Password:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $user_data['password']; ?></p>
                    </div>
                </div>

                <div class="updt">
                    <a href="doctor_profile_ai_update.php?edit=<?php echo $user_data['id']; ?>" class="inline-btn">update profile</a>
                </div>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>