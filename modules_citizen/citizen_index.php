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

    <!-- Icon -->
    <link rel="icon" href="img/brgylogoreal.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- google fonts link  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/citizen_index.css">

    <!-- css animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



</head>

<body>
    <!-- Admin Header -->
    <?php
    include '../components/header_citizen.php';
    ?>

    <!-- Home section starts -->

    <section class="dashboard">
        <h1 class="heading">Home</h1>

        <!-- Slideshow container -->
        <div class="mb-5 slideshow-container fade">

            <!-- Full images with numbers and message Info -->
            <div class="Containers">
                <img src="../img/slide1.png" style="width:100%">
            </div>

            <div class="Containers">
                <img src="../img/slide2.jpg" style="width:100%">
            </div>

            <div class="Containers">
                <img src="../img/slide3.jpg" style="width:100%">
            </div>

            <!-- Back and forward buttons -->
            <a class="Back" onclick="plusSlides(-1)">&#10094;</a>
            <a class="forward" onclick="plusSlides(1)">&#10095;</a>
        </div>


        <!-- Weekly Calendar -->
        <div class="mt-5">
            <?php
            include '../components/weekly_calendar.php';
            ?>
        </div>

    </section>

    <!-- Services section starts  -->
    <section class="services" id="services">

        <div class="section-header">
            <h2 class="section-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Our Services</h2>
        </div>

        <div class="box-container ">
            <div class="box" data-aos="zoom-in-right" data-aos-duration="800">
                <img src="../img/service01.png" alt="">
                <h3>Medical Consultation</h3>
                <p>Free checkups are provided for the residents.</p>
            </div>

            <div class="box" data-aos="zoom-in-right" data-aos-duration="800">
                <img src="../img/service02.png" alt="">
                <h3>Emergency Help</h3>
                <p>Emergency hotlines to call or text.</p>
            </div>

            <div class="box" data-aos="zoom-in-right" data-aos-duration="800">
                <img src="../img/service03.png" alt="">
                <h3>First Aid</h3>
                <p>First aid services for patients.</p>
            </div>

            <div class="box" data-aos="zoom-in-right" data-aos-duration="1200">
                <img src="../img/healthcare_pink.png" alt="">
                <h3>Preventive care</h3>
                <p>Patient counseling to prevent illnesses, disease, or other health problems.</p>
            </div>

            <div class="box" data-aos="zoom-in-right" data-aos-duration="1200">
                <img src="../img/medication-bottle_pink.png" alt="">
                <h3>Pharmaceutical care</h3>
                <p>Pharmaceutical care for responsible provision of drug therapy to patient.</p>
            </div>

            <div class="box" data-aos="zoom-in-right" data-aos-duration="1200">
                <img src="../img/medicine_pink.png" alt="">
                <h3>Medical Assistance Program</h3>
                <p>Free medicine program for residents.</p>
            </div>
        </div>
    </section>
    <!-- Services section ends  -->

    <!-- Guidelines -->
    <section class="guidelines-block ">
        <div class="container">
            <div class="block-introduction ">
                <h2 class="block-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" >STOP THE SPREAD OF <span class="emphasize">GERMS</span>
                </h2>
            </div>

            <div class="guidelines-circle row">

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/sneezing.png" alt="sneezing" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Cover your mouth or nose</h2 >
                            <p class="">Cover your mouth and nose with a tissue when you cough or sneeze. Throw used
                                tissues in the trash. If you don't have a tissue, cough or sneeze into your elbow, not
                                your hands. </p>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <div class="services-item ">
                        <li>
                            <picture>
                                <img src="../img/no-touch.png" alt="distance" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Avoid touching your eyes, nose and mouth</h2>
                            <p class="">Hands touch many surfaces and can pick up viruses. Once contaminated, hands can
                                transfer the virus to your eyes, nose or mouth. </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <div class="services-item ">
                        <li>
                            <picture>
                                <img src="../img/distance.png" alt="distance" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Maintain distance</h2 >
                            <p class=""> the practice of keeping distance between yourself and people you don't live
                                with. It also involves avoiding groups, gatherings and crowds in both indoor and outdoor
                                spaces.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/disinfect.png" alt="disinfect" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Disinfect</h2>
                            <p class="">
                                Disinfecting can kill harmful germs that remain on surfaces after cleaning. By killing
                                germs on a surface after cleaning, disinfecting can further lower the risk of spreading
                                disease.</p>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/quarantine.png" alt="sneezing" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Seek medical care early</h2>
                            <p class="">Stay home if you feel unwell. If you have a fever, cough and difficulty
                                breathing, seek medical attention and call in advance. Follow the directions of your
                                local health authority.</p>
                        </div>
                    </ul>
                </div>

                <div class="col-sm-4" data-aos="zoom-in-right" data-aos-duration="800">
                    <ul class="services-item">
                        <li>
                            <picture>
                                <img src="../img/wash-your-hands.png" alt="disinfect" class="guide-picture">
                            </picture>
                        </li>
                        <div class="services-txt">
                            <h2 class="">Wash your hands frequently</h2>
                            <p class="">Wash your hands often with soap and water for at least 20 seconds. Washing your
                                hands with soap and water or using alcohol-based hand rub kills viruses that may be on
                                your hands.</p>
                        </div>
                    </ul>
                </div>
            </div>


    </section>
    <!-- Guidelines End -->

    <!-- Articles -->
    <div class="article-block">

        <div class="section-header mt-5">
            <h2 class="section-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Articles</h2>
        </div>

        <div class="container row">

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://happytummy.aashirvaad.com/en/wp-content/uploads/2023/05/Good-Eating-Habits.jpeg" class="mask">
                <div class="h1">Move More, Eat Right</div>
                <p>A life lived long and healthy starts with a balanced diet and enough exercise.</p>

                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/move-more-eat-right" target="_" class="button">Read More</a></div>
            </div>

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://images.mid-day.com/images/images/2021/aug/environmental%20day_d.jpg" class="mask">
                <div class="h1">Be Clean, Live Sustainably</div>
                <p>The environment, climate, and disasters can have a great impact on health. </p>
                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/be-clean-live-sustainably" target="_" class="button">Read More</a></div>
            </div>

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://www.adb.org/sites/default/files/content-media/124816-vv-12162020-philippines-vaccination090-copy.jpeg" class="mask">
                <div class="h1">Get Vaccinated</div>
                <p>Immunization is the best protection against vaccine preventable diseases for all ages.</p>

                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/get-vaccinated" target="_" class="button">Read More</a></div>
            </div>

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://t4.ftcdn.net/jpg/04/10/78/23/360_F_410782386_wRjZM340f2erGZjuMKZzcsuKDUUiQ2ZD.jpg" class="mask">
                <div class="h1">Don't Smoke, Avoid Alcohol, Say No to Drugs</div>
                <p>Substance Abuse can be defined as a pattern of harmful use of any substance for mood-altering
                    purposes.</p>

                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/dont-smoke-avoid-alcohol-say-no-to-drugs" target="_" class="button">Read More</a></div>
            </div>

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://i.ytimg.com/vi/aLKcZu_1_vY/mqdefault.jpg" class="mask">
                <div class="h1">Care for Yourself, Care for Others</div>
                <p>There is no health without mental health. Our mental health is an integral part of our overall health
                    and it is necessary that we take care of it. </p>

                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/care-for-yourself-care-for-others" target="_" class="button">Read More</a></div>
            </div>

            <div class="square" data-aos="zoom-in-up" data-aos-duration="1200">
                <img src="https://blog-images-1.pharmeasy.in/2018/11/30131143/Aids-banners_1-01-01.jpg" class="mask">
                <div class="h1">Practice Safe Sex</div>
                <p>Sexual and reproductive health (SRH) is fundamental to one's overall health and well-being. </p>

                <div><a href="https://www.healthypilipinas.ph/campaigns/healthy-habits/practice-safe-sex" target="_" class="button">Read More</a></div>
            </div>

        </div>
    </div>
    <!-- Articles Ends -->

    <!-- Kalinga Features  -->
    <section class="features-block block" id="features">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title mt-5" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><span class="emphasize">Kalinga</span> Features</h2>
            </div>

            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <div class="features">

                        <div class="features--item" data-aos="fade-right" data-aos-duration="400">
                            <div class="img-block">
                                <img src="../img/contacts_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Family List </h3>
                                <p>Shows <span class="emphasize">records</span> of each member of a family.
                            </div>
                        </div>

                        <div class="features--item" data-aos="fade-right" data-aos-duration="800">
                            <div class="img-block">
                                <img src="../img/prescription_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Medical Notes</h3>
                                <p>View <span class="emphasize"> medical records</span> of a patient.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1200">
                            <div class="img-block">
                                <img src="../img/qr-code_pink.png" alt="" width="50" height="50">

                            </div>
                            <div class="txt-block">
                                <h3>QR Code Modules</h3>
                                <p> <span class="emphasize">Scan</span>
                                    QR code for the patient's information.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1600">
                            <div class="img-block">
                                <img src="../img/calendar_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Calendar</h3>
                                <p>Keep track of the different <span class="emphasize">events</span> of the health
                                    center.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2000">
                            <div class=" img-block">
                                <img src="../img/information_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Patient Information</h3>
                                <p>Shows the <span class="emphasize">records</span> of the patient in the health
                                    center.</p>
                            </div>

                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2400">
                            <div class="img-block">
                                <img src="../img/ticket_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Queueing</h3>
                                <p>Log an <span class="emphasize">appointment</span> on the health center.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5" data-aos="fade-left" data-aos-duration="1200">
                    <img src="../img/Doctor-rafiki.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Kalinga Features End-->

    <!--Parallax-->
    <style>
        .parallax {
            /* The image used */
            background-image: url("../img/logo1.png");

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media only screen and (max-width: 768px) {
        /* Adjust the height for smaller screens */
        .parallax {
            min-height: 250px; /* You can adjust this value as needed */
        }
    }
    </style>
    <div class="parallax mb-5"></div>
    <!-- Container element -->

    <!-- About section starts  -->
    <section class="services" id="services">

        <div class="section-header mt-5">
            <h2 class="section-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">About Us</h2>
        </div>

        <div class="container">
            <div class="row min-vh-100 align-items-center text-center text-md-left">
                <div class="col-md-6 pr-md-5" data-aos="fade-right" data-aos-duration="1200">
                    <img src="../img/home_mission.png" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 mission" data-aos="fade-left" data-aos-duration="1200">
                    <h1><span>Mission</span></h1>
                    <p>Providing health care services to the community particularly the poor and vulnerable groups
                        (lactating mothers, malnourished children, school children, pregnant mothers, etc.) so that
                        they
                        can contribute actively, productively and participate meaningfully in community life,
                        practicing
                        healthy lifestyles.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row min-vh-100 align-items-center text-center text-md-left" data-aos="fade-right" data-aos-duration="1200">
                <div class="col-md-6 pr-md-5">
                    <img src="../img/home_vision.png" width="100%" alt="">
                </div>

                <div class="col-md-6 pl-md-5 vision" data-aos="fade-left" data-aos-duration="1200">
                    <h1><span>Vision</span></h1>
                    <p>A united, cooperative and highly professional staff of health care delivery workers whose
                        focus
                        and passion is to help the community become a conducive, healthful and productive
                        environment
                        using the most modern technology and health care delivery systems to respond to the needs of
                        its
                        members, thereby making the CHO a model office that is respected, trusted and recognized by
                        the
                        officials and loved by the community.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section ends  -->

    <!-- footer section starts  -->
    <div class="footer">
        <div class="box-container">
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
    <script src="../js/citizen_slideShow.js"></script>
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Include AOS library script at the end of the body -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>