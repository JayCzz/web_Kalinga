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
        <meta name="Totalport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_index.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_doctor.php'; 
        ?>

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Dashboard</h1>
        
            <div class="box-container">
                <div class="box">
                    <h3>Welcome!</h3>
                    <a href="#" class="btn"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></a>
                </div>

                <div class="box">
                    <?php
                        $sql = "SELECT * FROM `qr_code`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);
                        }
                    ?>
                    <h3><?= $num; ?></h3>
                    <a href="#" class="btn">Total Families</a>
                </div>

                <div class="box">
                    <?php
                        $sql = "SELECT * FROM `users`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);
                        }
                    ?>
                    <h3><?= $num; ?></h3>
                    <a href="#" class="btn">Total Users</a>
                </div>

                <div class="box">
                    <?php
                        $sql = "SELECT * FROM `admin`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);
                        }
                    ?>
                    <h3><?= $num; ?></h3>
                    <a href="#" class="btn">Total Admins</a>
                </div>

                <div class="box">
                    <?php
                        $sql = "SELECT * FROM `doctor`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);
                        }
                    ?>
                    <h3><?= $num; ?></h3>
                    <a href="#" class="btn">Total Doctors</a>
                </div>

                <div class="box">
                    <?php
                        $sql = "SELECT * FROM `nurse`";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $num = mysqli_num_rows($result);
                        }
                    ?>
                    <h3><?= $num; ?></h3>
                    <a href="#" class="btn">Total Nurses</a>
                </div>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>