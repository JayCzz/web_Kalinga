<?php 

session_start();

	include("components/connection.php");
	include("components/functions.php");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/verification_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

		<title>Verification</title>
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <span>Login To Verify</span>
                </div>
                
                <form action="#">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    
                    <div class="row button">
                        <input type="submit" onclick="check(this.form)" value="Login">
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript" src="js/verification.js"></script>
    </body>
</html>