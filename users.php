<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/users_style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapois.com/css2? family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Welcome | Kalinga</title>

    <!-- Vendors -->
    <link rel="icon" href="img/brgylogoreal.png">
    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <!-- css animation  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icons animation  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     
 

</head>
</head>

<body>
    <!-- Header Start -->

    <header class="header">
        <a href="#" class="logo">Kalinga</a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <nav class="navbar">
            <a href="#header" style="--i:0;">Home</a>
            <a href="#services" style="--i:1;">Services</a>
            <a href="#features" style="--i:2;">Features</a>

            <div class="nav_btn">
                <a href="citizen_signup.php" class="nav_item" style="--i:3;">register</a>
                <a href="#login" class="nav_item" style="--i:3;">Login</a>
            </div>
        </nav>
    </header>
    <!-- Weekly Calendar -->
    <?php
    include '../components/weekly_calendar.php';
    ?>
    <!-- Banner -->
    <section class="banner-block home-banner" id="header">
        <div class="container">
            <!-- -->
            <a href="https://ibb.co/5KRgHy7"><img class="hero-bg" src="https://i.ibb.co/0sGRbSw/kalinga-wave.png" alt="kalinga Banner"></a>
            <!-- -->
            <div class="row justify-content-between">
                <div class="col-sm-5">
                    <ul class="banner-slogan" data-aos="fade-right" data-aos-duration="1200">
                        <li>
                            <h1 class="title"><span class="emphasize">Simple</span> clinic management system designed
                                for doctors</h1>
                        </li>
                        <li>
                            <p class="subtitle" data-aos="fade-right" data-aos-duration="1200">Forget about storing and
                                filing patient records.</p>
                            <p class="subtitle" data-aos="fade-right" data-aos-duration="1200">Use <span class="emphasize">Kalinga</span> an effective medical clinic
                                management system at your fingertips.</p>
                        </li>
                        <li>
                            <div class="buttons">
                                <a href="#" class="button">
                                    <div class="img-block">
                                        <picture>
                                            <source srcset="https://klinika.ph/klinika/images/google.webp" type="image/webp">
                                            <source srcset="https://klinika.ph/klinika/images/google.png" type="image/png">
                                            <img src="https://klinika.ph/klinika/images/google.png" alt="Klinika - Clinic Management System for Doctors">
                                        </picture>
                                    </div>
                                    <div class="txt-block">
                                        <p>GET IT ON</p>
                                        <p>Google Play</p>
                                    </div>
                                </a>

                                <a href="#" class="button">
                                    <div class="img-block">
                                        <picture>
                                            <source srcset="https://klinika.ph/klinika/images/klinika.webp" type="image/webp">
                                            <source srcset="https://klinika.ph/klinika/images/klinika.png" type="image/png">
                                            <img src="https://klinika.ph/klinika/images/klinika.png" alt="Klinika - Clinic Management System for Doctors">
                                        </picture>
                                    </div>
                                    <div class="txt-block">
                                        <p>USE IT ON A</p>
                                        <p>Web Browser</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6">
                    <div class="banner-hero" data-aos="fade-left" data-aos-duration="1200">
                        <img src="https://klinika.ph/klinika/images/hero.svg" alt="Klinika - Clinic Management System for Doctors">
                    </div>
                </div>
            </div>
        </div>
        <div style="height:32px;"></div>
    </section>


    <!-- LOG IN AS CONTENT  -->
    <div class="hero" id="login">

        <div class="section-header">
            <h2 class="section-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">LOGIN AS</h2>
        </div>

        <div class="row">
            <a href="verification.php" class="col">
                <div class="profile" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                    <img src="img/doctor.png">
                    <h2>Doctor</h2>
                </div>
            </a>

            <a href="verification.php" class="col">
                <div class="profile" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                    <img src="img/nurse.png">
                    <h2>Nurse</h2>
                </div>
            </a>

            <a href="citizen_login.php" class="col">
                <div class="profile" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                    <img src="img/citizen.png">
                    <h2>Citizen</h2>
                </div>
            </a>
        </div>
    </div>


    <!-- Services section starts  -->
    <section class="services" id="services">

        <div class="section-header">
            <h2 class="section-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000">Our Services
            </h2>
        </div>

        <div class="box-container ">
            <div class="box" data-aos="fade-right" data-aos-duration="800">
                <img src="img/service01.png" alt="">
                <h3>Medical Consultation</h3>
                <p>Free checkups are provided for the residents.</p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-duration="800">
                <img src="img/service02.png" alt="">
                <h3>Emergency Help</h3>
                <p>Emergency hotlines to call or text.</p>
            </div>

            <div class="box" data-aos="fade-left" data-aos-duration="800">
                <img src="img/service03.png" alt="">
                <h3>First Aid</h3>
                <p>First aid services for patients.</p>
            </div>

            <div class="box" data-aos="fade-right" data-aos-duration="1200">
                <img src="img/healthcare_pink.png" alt="">
                <h3>Preventive care</h3>
                <p>Patient counseling to prevent illnesses, disease, or other health problems.</p>
            </div>

            <div class="box" data-aos="fade-up" data-aos-duration="1200">
                <img src="img/medication-bottle_pink.png" alt="">
                <h3>Pharmaceutical care</h3>
                <p>Pharmaceutical care for responsible provision of drug therapy to patient.</p>
            </div>

            <div class="box" data-aos="fade-left" data-aos-duration="1200">
                <img src="img/medicine_pink.png" alt="">
                <h3>Medical Assistance Program</h3>
                <p>Free medicine program for residents.</p>
            </div>
        </div>
    </section>

    <!-- Kalinga Features  -->
    <section class="features-block block">
        <div class="container">

            <div class="Features-header" id="features">
                <h2 class="Features-title" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><span class="emphasize">Kalinga</span> Features</h2>
            </div>

            <div class="row justify-content-between align-items-center">
                <div class="col-sm-6">
                    <div class="features">

                        <div class="features--item" data-aos="fade-right" data-aos-duration="400">
                            <div class="img-block">
                                <img src="img/contacts_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Family List </h3>
                                <p>Shows <span class="emphasize">records</span> of each member of a family.
                            </div>
                        </div>

                        <div class="features--item" data-aos="fade-right" data-aos-duration="800">
                            <div class="img-block">
                                <img src="img/prescription_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Medical Notes</h3>
                                <p>View <span class="emphasize"> medical records</span> of a patient.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1200">
                            <div class="img-block">
                                <img src="img/qr-code_pink.png" alt="" width="50" height="50">

                            </div>
                            <div class="txt-block">
                                <h3>QR Code Modules</h3>
                                <p> <span class="emphasize">Scan</span>
                                    QR code for the patient's information.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="1600">
                            <div class="img-block">
                                <img src="img/calendar_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Calendar</h3>
                                <p>Keep track of the different <span class="emphasize">events</span> of the health
                                    center.</p>
                            </div>
                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2000">
                            <div class=" img-block">
                                <img src="img/information_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Patient Information</h3>
                                <p>Shows the <span class="emphasize">records</span> of the patient in the health
                                    center.</p>
                            </div>

                        </div>
                        <div class="features--item" data-aos="fade-right" data-aos-duration="2400">
                            <div class="img-block">
                                <img src="img/ticket_pink.png" alt="" width="50" height="50">
                            </div>
                            <div class="txt-block">
                                <h3>Queueing</h3>
                                <p>Log an <span class="emphasize">appointment</span> on the health center.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5" data-aos="fade-left" data-aos-duration="1200">
                    <img src="img/Doctor-rafiki.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Kalinga Features End-->

    <!-- FOOTER -->
    <section class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.7034557097236!2d121.10965139999999!3d14.672763099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b989bda49a3f%3A0x34808daa0bf0a33f!2sMakabayan%20St%2C%20Nangka%2C%20Marikina%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700483179802!5m2!1sen!2sph" width="100%" height="250" frameborder="0"></iframe>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="footer-col">
                        <li class="title">
                            <h3>Kalinga</h3>
                        </li>
                        <li>
                            <p class="mb-4">Kalinga Medical Clinic Management System software and mobile application of
                                Baranggay Nangka, Marikina City.
                                Enable you to access across boundaries from different platforms and locations.</p>
                        </li>
                        <li>
                            <div class="buttons">
                                <a href="" class="button">
                                    <div class="img-block">
                                        <picture>
                                            <source srcset="https://klinika.ph/klinika/images/google.webp" type="image/webp">
                                            <source srcset="https://klinika.ph/klinika/images/google.png" type="image/png">
                                            <img src="https://klinika.ph/klinika/images/google.png" alt="Klinika - Clinic Management System for Doctors">
                                        </picture>
                                    </div>
                                    <div class="txt-block">
                                        <p>GET IT ON</p>
                                        <p>Google Play</p>
                                    </div>
                                </a>

                                <a href="#" class="button">
                                    <div class="img-block">
                                        <picture>
                                            <source srcset="https://klinika.ph/klinika/images/klinika.webp" type="image/webp">
                                            <source srcset="https://klinika.ph/klinika/images/klinika.png" type="image/png">
                                            <img src="https://klinika.ph/klinika/images/klinika.png" alt="Klinika - Clinic Management System for Doctors">
                                        </picture>
                                    </div>
                                    <div class="txt-block">
                                        <p>USE IT ON A</p>
                                        <p>Web Browser</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="footer-col">
                        <li class="title">
                            <h3>Connect with Us</h3>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Makabayan St., Nangka, Marikina City.</span>
                        </li>
                        <li>

                            <i class="fas fa-mobile-alt"></i>
                            <span>
                                586-4836
                            </span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>nangka.health.center@gmail.com</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>
    <!--/.page-section-->
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Copyright 2014 | All Rights Reserved -- Template by <a href="http://webThemez.com">WebThemez.com</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
    </section>
    <a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
    <!-- Scripts -->

    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Include AOS library script at the end of the body -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--Custom-->
    <script type="text/javascript">
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0)
        });
    </script>

</body>

</html>