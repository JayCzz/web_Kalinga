<?php 
	session_start();

	include 'components/connection.php';
	include 'components/functions.php';

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username)) {

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result) {
				if($result && mysqli_num_rows($result) > 0) {
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password) {
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: modules_citizen/citizen_index.php");
						die;
					}
				}
			}
			
			$warning_msg[] = 'Wrong Username or Password!';
		}
		
		else {
			echo "wrong username or password!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Page</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/login_style.css">
    </head>

    <body>
        <section class="side"></section>

        <section class="main">
            <div class="login-container">
                <p class="title">Welcome</p>
                <div class="separator"></div>
                <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>

                <form class="login-form" method="post">
                    <div class="form-control">
                        <input type="text" name="username" placeholder="Username" required>
                        <i class="fas fa-user"></i>
                    </div>

                    <div class="form-control">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-lock"></i>
                    </div>

                    <button class="submit" type="submit">Login</button>
                    <div class="signup-link">Not a member? <a href="citizen_signup.php">Signup now</a></div>
                </form>
            </div>
        </section>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

		<?php include 'components/message.php'; ?>
    </body>
</html>