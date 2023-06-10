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
        <link rel="stylesheet" href="../css/citizen_profile.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_citizen.php'; 
        ?>

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Your Profile</h1>

            <div class="info">
                <div class="user">
                    <img src="../uploaded_qr/<?php echo $user_data['familyNumber']; ?>" alt="">
                    <h3><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                    <p><?php echo $user_data['familyNumber']; ?></p>
                </div>
        
                <div class="box-container slim">
                    <div class="infomenu">
                        <a href="citizen_profile_pi.php" class="infomenu-box">
                            <img src="../img/icon01.png" alt="">
                            <h3>Personal Info</h3>
                        </a>
                    </div>
                    <div class="infomenu active">
                        <a href="citizen_profile_pc.php" class="infomenu-box">
                            <img src="../img/icon02.png" alt="">
                            <h3>Preconsultation</h3>
                        </a>
                    </div>
                    <div class="infomenu">    
                        <a href="citizen_profile_ai.php" class="infomenu-box">
                            <img src="../img/icon03.png" alt="">
                            <h3>Account Info</h3>
                        </a>
                    </div>
                </div>

                <div class="details">
                    <div class="rowone">
                        <h3>Height:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>
                            <?php
                                if($user_data['height'] == '0') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo "$user_data[height] cm"; 
                                } 
                            ?>
                        </p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Weight:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>
                            <?php
                                if($user_data['weight'] == '0') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo "$user_data[weight] kg";
                                } 
                            ?>
                        </p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Blood Pressure:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>
                            <?php
                                if($user_data['bp'] == '') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo $user_data['bp'];
                                } 
                            ?>
                        </p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Date:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>
                            <?php
                                if($user_data['updated'] == '0000-00-00') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo $user_data['updated'];
                                } 
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>