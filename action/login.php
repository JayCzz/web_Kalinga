<?php
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    if(isset($_POST['citizen_login'])) {

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
						header("Location: ../modules_citizen/citizen_index.php");
						die;
					}
				}
			}
			
			$_SESSION['status'] = 'Wrong Username or Password!';
			$_SESSION['status_code'] = "error";
            header("Location: ../citizen_login.php");
		}
		
		else {
			$_SESSION['status'] = 'Wrong Username or Password!';
			$_SESSION['status_code'] = "error";
            header("Location: ../citizen_login.php");
		}
	}
?>