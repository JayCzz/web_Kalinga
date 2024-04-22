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
    <link rel="stylesheet" href="../css/nurse_profile.css">
</head>

<body>
    <!-- Admin Header -->
    <?php
    include '../components/header_nurse.php';
    ?>
    =
    <!-- -->
    <section class="dashboard">
        <h1 class="heading">Your Profile</h1>

        <div class="info">
            <div class="user">
                <?php
                if ($user_data['image'] == '') {
                    echo '<img src="../uploaded_img/default_admin.jpg" alt="">';
                } else {
                    echo '<img src="../uploaded_img/' . $user_data['image'] . '" alt="">';
                }
                ?>
                <h3><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                <p><?php echo $user_data['type']; ?></p>
            </div>

            <div class="box-container slim">
                <div class="infomenu active">
                    <a href="nurse_profile_pi.php" class="infomenu-box">
                        <img src="../img/icon01.png" alt="">
                        <h3>Personal Info</h3>
                    </a>
                </div>
                <div class="infomenu">
                    <a href="nurse_profile_ai.php" class="infomenu-box">
                        <img src="../img/icon03.png" alt="">
                        <h3>Account Info</h3>
                    </a>
                </div>
            </div>

            <div class="details">
                <div class="rowone">
                    <h3>Birthday:</h3>
                </div>
                <div class="rowtwo">
                    <p><?php echo $user_data['birthday']; ?></p>
                </div>

                <div class="rowone">
                    <h3>Age:</h3>
                </div>
                <div class="rowtwo">
                    <p><?php echo $user_data['age']; ?></p>
                </div>

                <div class="rowone">
                    <h3>Sex:</h3>
                </div>
                <div class="rowtwo">
                    <p><?php echo $user_data['sex']; ?></p>
                </div>
            </div>

            <div class="updt">
                <a href="nurse_profile_pi_update.php?edit=<?php echo $user_data['id']; ?>" class="inline-btn">update profile</a>
            </div>
        </div>
    </section>


    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
</body>

</html>