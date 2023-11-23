<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	function sendemail_verify($firstName, $email, $verify_token)
	{
		$mail = new PHPMailer(true);
		// $mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->SMTPAuth = true;

		$mail->Host = "smtp.gmail.com";
		$mail->Username = "capsdummy1@gmail.com";
		$mail->Password = "cfioixdwhwleptco";

		$mail->SMTPSecure = "tls";
		$mail->Port = 587;

		$mail->setFrom("capsdummy1@gmail.com", 'Kalinga');
		$mail->addAddress($email);

		$mail->isHTML(true);
		$mail->Subject = 'Email Verification from Nangka Health Center';

		$email_template = "
			<h2>You have Registered with Nangka Health Center</h2>
			<h4>Verify your email address to Login with the below given link</h4>
			<br/><br/>
			<a href='http://localhost/capstone/components/email_verification/verify_email.php?token=$verify_token'> Click Me </a>
		";

		$mail->Body = $email_template;
		$mail->send();
	}

	function sendemail_confirmation($email, $otp)
	{
		$mail = new PHPMailer(true);
		// $mail->SMTPDebug = 2;
		$mail->isSMTP();
		$mail->SMTPAuth = true;

		$mail->Host = "smtp.gmail.com";
		$mail->Username = "capsdummy1@gmail.com";
		$mail->Password = "cfioixdwhwleptco";

		$mail->SMTPSecure = "tls";
		$mail->Port = 587;

		$mail->setFrom("capsdummy1@gmail.com", 'Kalinga');
		$mail->addAddress($email);

		$mail->isHTML(true);
		$mail->Subject = 'Kalinga Verification Code';

		$email_template = "
			<h4>We received a request to access your Kalinga Account through your email address. Your verification code is:</h4>
			<br/>
			<h2>$otp</h2>
			<br/>
			<h4>If you did not request this code, it is possible that someone else is trying to access your account. Do not forward or give this code to anyone.</h4>
		";

		$mail->Body = $email_template;
		$mail->send();
	}

	function random_num($length)
	{

		$text = "";
		if($length < 5)
		{
			$length = 5;
		}

		$len = rand(4,$length);

		for ($i=0; $i < $len; $i++) { 
			# code...

			$text .= rand(0,9);
		}

		return $text;
	}

	function check_login($con)
	{

		if(isset($_SESSION['user_id']))
		{

			$id = $_SESSION['user_id'];
			$query = "select * from users where user_id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		if(isset($_SESSION['user_id']))
		{

			$id = $_SESSION['user_id'];
			$query = "select * from admin where user_id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		if(isset($_SESSION['user_id']))
		{

			$id = $_SESSION['user_id'];
			$query = "select * from doctor where user_id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		if(isset($_SESSION['user_id']))
		{

			$id = $_SESSION['user_id'];
			$query = "select * from nurse where user_id = '$id' limit 1";

			$result = mysqli_query($con,$query);
			if($result && mysqli_num_rows($result) > 0)
			{

				$user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		}

		//redirect to login
		header("Location: ../users.php");
		die;

	}

?>