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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/admin_index.css">
        <title>Calendar</title>
    </head>

    <body>
        <header>
            <div class="logo">
                <img src="img/dp.jpg" alt="">
            </div>
            <input type="checkbox" id="nav_check" hidden>
            <nav>
                <div class="logo">
                    <img src="img/dp.jpg" alt="">
                </div>
                
                <ul>
                    <li>
                        <a href="admin_index.php">Home</a>
                    </li>
                    <li>
                        <a href="admin_calendar.php" class="active">Calendar</a>
                    </li>
                    <li>
                        <a href="">Notifications</a>
                    </li>
                    <li>
                        <a href="admin_qr_generator.php">QR Generator</a>
                    </li>
                    <li>
                        <a href="admin_qr_scanner.php">QR Scanner</a>
                    </li>
                    <li>
                        <a href="">SOS</a>
                    </li>
                    <li class="logout">
                        <a href="logout.php" class="nav-link">
                            <i data-feather="log-out"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <label for="nav_check" class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </header>

        
    </body>
</html>