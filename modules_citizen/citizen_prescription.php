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
    <title>Prescription</title>

    <!-- Icon -->
    <link rel="icon" href="img/brgylogoreal.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- google fonts link  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

    <!-- bootstrap link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap-grid.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/citizen_prescription.css">

</head>

<body>
    <!-- Admin Header -->
    <?php
    include '../components/header_citizen.php';
    ?>

    <!-- Content Start -->
    <section class="dashboard">
        <h1 class="heading">Prescription</h1>
    </section>

    <div class="row mb-5">

        <!-- col for the form -->
        <div class="prescription-form ">

            <div class="container-head mt-5">
                <div class="header-content">
                    <div class="logo-container">
                        <img class="prescription_logo" src="../img/brgylogoreal.png" alt="">
                    </div>
                    <div class="text-container">
                        <h1 class="header_title">Republic of the Philippines</h1>
                        <h1 class="header_title2">City Health Office</h1>
                        <h1 class="header_title3">Marikina City</h1>
                    </div>
                    <div class="logo-container">
                        <img class="prescription_logo" src="../img/brgylogoreal.png" alt="">
                    </div>
                </div>
            </div>

            <!-- -->
            <div class="container mt-5">
                <div>
                    <h3 class="header_prescription"> Patient Information </h3>
                </div>
                <div class="item row">
                    <div class="col ">
                        <p class="text"><strong>Name:</strong> John Doe</p>
                        <p class="text"><strong>Age:</strong> 30</p>
                    </div>
                    <br>
                    <div class="col ">
                        <p class="text"><strong>Gender:</strong> Male</p>
                        <p class="text"><strong>Date of Issue:</strong>_______</p>
                    </div>
                </div>
            </div>

            <!-- -->
            <hr class=" mt-3" size="3" width="100%" color="black">
            <!-- -->
            <div class="container mt-5">
                <div class="col">
                    <h1 class="rx_title"><img class="rx_logo" src="../img/rx-logo.png" alt="">List of Prescriped
                        Medication
                    </h1>
                </div>

                <table class="center  mt-3 mb-3">
                    <thead>
                        <tr class="content">
                            <th class="" scope="col">#</th>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Quantity</th>
                            <th class="" scope="col">Instruction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="content">
                            <th scope="row">1</th>
                            <td>Biogesic</td>
                            <td>3</td>
                            <td>Every 8 hours</td>
                        </tr>
                        <tr class="content">
                            <th scope="row">2</th>
                            <td>Biogesic</td>
                            <td>3</td>
                            <td>Every 8 hours</td>
                        </tr>
                        <tr class="content">
                            <th scope="row">3</th>
                            <td>Biogesic</td>
                            <td>3</td>
                            <td>Every 8 hours</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <hr class=" mt-3" size="3" width="100%" color="black">
            <!-- -->
            <div class="container mt-5 ">
                <div class="row">
                    <div class="col">
                        <p class="text"><strong>M.D.:</strong>_______</p>
                        <p class="text"><strong>Lic No.:</strong>_______</p>
                    </div>

                    <div class="col mt-3">
                        <p class="text"><strong>Your next visit is on:</strong>_______</p>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="prescription-footer mt-5">
                <div class="row">
                    <div class="col ">
                        <p class="info"><i class="info fas fa-phone me-3"></i> 586-4836</p>
                    </div>

                    <div class="col ">
                        <p class="info"><i class="info fas fa-envelope me-3"></i>nangka.health.center@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <!-- Content Ends -->

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>