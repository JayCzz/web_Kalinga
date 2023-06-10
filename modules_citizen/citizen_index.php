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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
        
		<!-- bootstrap link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/citizen_index.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_citizen.php'; 
        ?>

        <!-- Home section starts -->
        <section class="dashboard">
            <h1 class="heading">Home</h1>
        </section>

        <section class="home">
            <div class="slide">
                <div class="content">
                    <span>Barangay Nangka</span>
                    <h3>Health Center</h3>
                </div>
                <div class="image">
                    <img src="../img/brgylogoreal.png" alt="">
                </div>
            </div>
        </section>
        <!-- Home section ends -->
    
        <!-- Services section starts  -->
        <section class="services" id="services">
            <h2 class = "lead">Healthcare Services</h2>
        
            <div class="box-container container">
                <div class="box">
                    <img src="../img/service01.png" alt="">
                    <h3>Medical Consultation</h3>
                    <p>Free checkups are provided for the residents.</p>
                </div>
            
                <div class="box">
                    <img src="../img/service02.png" alt="">
                    <h3>Emergency Help</h3>
                    <p>Emergency hotlines to text or call.</p>
                </div>
            
                <div class="box">
                    <img src="../img/service03.png" alt="">
                    <h3>First Aid</h3>
                    <p>Free first aid services for patients.</p>
                </div>
            </div>
        </section>
        <!-- Services section ends  -->

        
        <!--Parallax-->
        <style>
            .parallax {
                /* The image used */
                background-image: url("../img/logo1.png");
              
                /* Set a specific height */
                min-height: 900px;
            
                /* Create the parallax scrolling effect */
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>

            <!-- Container element -->
        <div class="parallax"></div>
    
        <!-- About section starts  -->
        <section class="services" id="services">
            <h2 class = "lead">About Us</h2>
        
            <div class="container">
                <div class="row min-vh-100 align-items-center text-center text-md-left">
                    <div class="col-md-6 pr-md-5">
                        <img src="../img/home_mission.png" width="100%" alt="">
                    </div> 
                
                    <div class="col-md-6 pl-md-5 mission">
                        <h1><span>Mission</span></h1>
                        <p>Providing health care services to the community particularly the poor and vulnerable groups (lactating mothers, malnourished children, school children, pregnant mothers, etc.) so that they can contribute actively, productively and participate meaningfully in community life, practicing healthy lifestyles.</p>
                    </div>
                </div>
            </div>
        
            <div class="container">
                <div class="row min-vh-100 align-items-center text-center text-md-left">
                    <div class="col-md-6 pr-md-5">
                        <img src="../img/home_vision.png" width="100%" alt="">
                    </div> 
                
                    <div class="col-md-6 pl-md-5 vision">
                        <h1><span>Vision</span></h1>
                        <p>A united, cooperative and highly professional staff of health care delivery workers whose focus and passion is to help the community become a conducive, healthful and productive environment using the most modern technology and health care delivery systems to respond to the needs of its members, thereby making the CHO a model office that is respected, trusted and recognized by the officials and loved by the community.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section ends  -->
        
        <!-- footer section starts  -->
        <div class="footer">
            <div class="box-container container">
                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>phone number</h3>
                    <p>586-4836</p>
                </div>
                
                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>our address</h3>
                    <p>Makabayan St., Nangka, Marikina City.</p>
                </div>
            
                <div class="box">
                    <i class="fas fa-clock"></i>
                    <h3>opening hours</h3>
                    <p>08:00 AM to 05:00 PM</p>
                </div>
            
                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email address</h3>
                    <p>nangka.health.center@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- footer section ends -->

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>