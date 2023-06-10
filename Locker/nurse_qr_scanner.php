<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin_qr_scanner.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <title>QR Code Scanner</title>
    </head>

    <body>
        <!-- Header -->
        <header class="header">
            <section class="flex">
                <a href="nurse.html" class="logo">Nurse</a>
      
                <div action="search.html" method="post" class="search-form">
                    <input type="text" name="search_box" required placeholder="search..." maxlength="100">
                    <button type="submit" class="fas fa-search"></button>
                </div>
      
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

        <!-- Side Bar -->
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
                        <a href="#">
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

        <!-- QR Code Scanner -->
        <section class="dashboard">
            <h1 class="heading">QR Code Scanner</h1>
            <div class="scanner">
                <div class="wrapper">
                    <form action="#" class="form">
                        <input type="file" hidden>
                        <img src="#" alt="qr-code">
                        <div class="content">
                            <i class="fas fa-cloud-upload"></i>
                            <p>Upload QR Code to Read</p>
                        </div>
                    </form>

                    <div class="details">
                        <textarea spellcheck="false" disabled></textarea>
                        <div class="buttons">
                            <button class="close">Close</button>
                            <button class="copy">Copy Text</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="js/qr_scanner.js"></script>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>    
    </body>
</html>