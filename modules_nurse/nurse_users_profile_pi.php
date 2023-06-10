<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];
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
        <link rel="stylesheet" href="../css/nurse_users_profile.css">
    </head>

    <body>
        <!-- Header -->
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Users Profile -->
        <?php
            $select = mysqli_query($con, "SELECT * FROM users  WHERE id = '$id'");
            while($row = mysqli_fetch_assoc($select)){
        ?>
        <section class="dashboard">
            <h1 class="heading">Users Profile</h1>

            <div class="info">
                <div class="user">
                    <img src="../uploaded_qr/<?php echo $row['familyNumber']; ?>" alt="">
                    <h3><?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?></h3>
                    <p><?php echo $row['familyNumber']; ?></p>
                </div>
        
                <div class="box-container slim">
                    <div class="infomenu active">
                        <a href="nurse_users_profile_pi.php?edit=<?php echo $row['id']; ?>" class="infomenu-box">
                            <img src="../img/icon01.png" alt="">
                            <h3>Personal Info</h3>
                        </a>
                    </div>
                    <div class="infomenu">
                        <a href="nurse_users_profile_pc.php?edit=<?php echo $row['id']; ?>" class="infomenu-box">
                            <img src="../img/icon02.png" alt="">
                            <h3>Preconsultation</h3>
                        </a>
                    </div>
                </div>

                <div class="details">
                    <div class="rowone">
                        <h3>Birthday:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['birthday']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Age:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['age']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Sex:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['sex']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Email:</h3>
                    </div>
                    <div class="rowtwo">
                        <p><?php echo $row['email']; ?></p>
                    </div>
                    
                    <div class="rowone">
                        <h3>Phone Number:</h3>
                    </div>
                    <div class="rowtwo">
                        <p>0<?php echo $row['phoneNumber']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php }; ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>