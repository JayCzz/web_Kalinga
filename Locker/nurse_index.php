<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin_index.css">
        <title>Home</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    </head>

    <body>
        <header class="header">
   
            <section class="flex">

                <a href="admin_index.php" class="logo">Nurse</a>

                <form action="search.html" method="post" class="search-form">
                    <input type="text" name="search_box" required placeholder="search..." maxlength="100">
                    <button type="submit" class="fas fa-search"></button>
                </form>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>

                <div class="profile">
                    <img src="img/pic-1.jpg" class="image" alt="">
                    <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                    <p class="role">Nurse</p>
                    <a href="profile.html" class="btn">view profile</a>
                </div>

            </section>

        </header>   

        <div class="side-bar">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="img/pic-1.jpg" class="image" alt="">
            <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
            <p class="role">Nurse</p>
            <a href="profile.html" class="btn">view profile</a>
        </div>

        <nav class="navbar">
            <!-- Navs -->
            <ul>
                <li>
                    <a href="nurse_index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-line-chart"></i>
                    <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-question"></i>
                    <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="inventory_page">
                    <i class="fa fa-briefcase"></i>
                    <span>Inventory</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span>Staff</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa fa-phone"></i>
                    <span>Contact Us</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="logout.php">
                    <i class="fa fa-sign-out"></i>
                    <span>Sign Out</span>
                    </a>
            </li>
        </ul>
        </nav>

        </div>

        <!-- Calendar -->
        <section class="dashboard">

        <h1 class="heading">Calendar</h1>

        <div class="box-container">

            <div class="box">
                <h3>Calendar</h3>
                <a href="schedule_admin" class="btn">View Calendar</a>
            </div>
            
        </div>

        </section>

        <!-- QR Code Menu -->
        <section class="dashboard">

        <h1 class="heading">QR Code Menu</h1>

        <div class="box-container">

            <div class="box">
                <h3>QR Code List</h3>
                <a href="qr_page" class="btn">View QR Code List</a>
            </div>

            <div class="box">
                <h3>QR Code Generator</h3>
                <a href="admin_qr_generator.php" class="btn">Open QR Code Generator</a>
            </div>

            <div class="box">
                <h3>QR Code Scanner</h3>
                <a href="nurse_qr_scanner.php" class="btn">Open QR Code Scanner</a>
            </div>

        </div>

        </section>

        <!-- Queueing Menu -->
        <section class="dashboard">

        <h1 class="heading">Queueing Menu</h1>

        <div class="box-container">

            <div class="box">
                <h3>Live Queueing Monitor</h3>
                <a href="#" class="btn">View Live Queueing Monitor</a>
            </div>

            <div class="box">
                <h3>Queueing Registration</h3>
                <a href="#" class="btn">Open Queueing Registration</a>
            </div>

            <div class="box">
                <h3>Counter</h3>
                <a href="#" class="btn">Open Counter</a>
            </div>

        </div>

        </section>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>