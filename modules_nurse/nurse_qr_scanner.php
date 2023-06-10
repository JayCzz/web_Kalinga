<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Code Scanner</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_qr_scanner.css">
    </head>

    <body>
        <!-- header section starts -->
        <header class="header">
            <section class="flex">
                <a href="nurse_index.html" class="logo">
                    Nurse
                </a>
            
                <div action="" method="post" enctype="multipart/form-data" class="search-form">
                    <input type="text" name="search" required placeholder="search..." maxlength="100">
                    <button type="submit" class="fas fa-search" name="submit"></button>
                </div>
            
                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>
            
                <div class="profile">
                    <img src="../img/pic-1.jpg" class="image" alt="">
                    <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                    <p class="role">Nurse</p>
                    <a href="#" class="btn">view profile</a>
                </div>
            </section>
        </header>
        <!-- header section ends -->

        <!-- side bar section starts  -->
        <div class="side-bar">
            <div id="close-btn">
                <i class="fas fa-times"></i>
            </div>
        
            <div class="profile">
                <img src="../img/pic-1.jpg" class="image" alt="">
                <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                <p class="role">Nurse</p>
                <a href="profile.html" class="btn">view profile</a>
            </div>
                    
            <!-- Navigation Bar -->
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="nurse_index.php">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="nurse_dashboard.php">
                            <i class="fa fa-line-chart"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="nurse_users_page.php">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="nurse_inventory.php">
                            <i class="fa fa-briefcase"></i>
                            <span>Inventory</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="nurse_preconsultation_users_search.php">
                            <i class="fa fa-user-md"></i>
                            <span>Preconsultation</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="nurse_index.php">
                            <i class="fa fa-phone"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
                
                    <li class="logout">
                        <a href="../components/logout.php">
                            <i class="fa fa-sign-out"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- side bar section ends -->

        <!-- QR Code Scanner -->
        <?php
            include '../components/qr_scanner.php'; 
        ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>    
    </body>
</html>