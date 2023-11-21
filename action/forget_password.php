<?php
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    $otp_str = str_shuffle("0123456789");
    $otp = substr($otp_str,0,6);

    $act_str = rand(100000, 10000000);
    $activation_code = str_shuffle("abcdefghijklmnopqrstuvwxyz".$act_str);

    if(isset($_POST['confirm_email'])) {

		//something was posted
		$email = $_POST['email'];

		// Email Exists or not in admin db
        $check_email_admin_query = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
        $check_email_admin_query_run = mysqli_query($con, $check_email_admin_query);
        
		// Email Exists or not in doctor db
        $check_email_doctor_query = "SELECT * FROM doctor WHERE email = '$email' LIMIT 1";
        $check_email_doctor_query_run = mysqli_query($con, $check_email_doctor_query);

		// Email Exists or not in nurse db
        $check_email_nurse_query = "SELECT * FROM nurse WHERE email = '$email' LIMIT 1";
        $check_email_nurse_query_run = mysqli_query($con, $check_email_nurse_query);

		// Email Exists or not in users db
        $check_email_users_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $check_email_users_query_run = mysqli_query($con, $check_email_users_query);

        if (mysqli_num_rows($check_email_admin_query_run) > 0)
        {
            $recovery = "UPDATE admin SET otp='$otp', activation_code='$activation_code' WHERE email = '$email'";
            $recovery_run = mysqli_query($con, $recovery);

            if ($recovery_run)
            {
                sendemail_confirmation("$email", "$otp");

                $_SESSION['status'] = "Verification Code Is Sent To Your Email";
                $_SESSION['status_code'] = "success";
                header("Location: ../components/forgot_password/confirm_otp.php?code=$activation_code");
            }
            else
            {
                $_SESSION['status'] = "Email Not Sent! Try Again.";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
        }

        elseif (mysqli_num_rows($check_email_doctor_query_run) > 0) 
        {
            $recovery = "UPDATE doctor SET otp='$otp', activation_code='$activation_code' WHERE email = '$email'";
            $recovery_run = mysqli_query($con, $recovery);

            if ($recovery_run)
            {
                sendemail_confirmation("$email", "$otp");

                $_SESSION['status'] = "Verification Code Is Sent To Your Email";
                $_SESSION['status_code'] = "success";
                header("Location: ../components/forgot_password/confirm_otp.php?code=$activation_code");
            }
            else
            {
                $_SESSION['status'] = "Email Not Sent! Try Again.";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
        }

        elseif (mysqli_num_rows($check_email_nurse_query_run) > 0)
        {
            $recovery = "UPDATE nurse SET otp='$otp', activation_code='$activation_code' WHERE email = '$email'";
            $recovery_run = mysqli_query($con, $recovery);

            if ($recovery_run)
            {
                sendemail_confirmation("$email", "$otp");

                $_SESSION['status'] = "Verification Code Is Sent To Your Email";
                $_SESSION['status_code'] = "success";
                header("Location: ../components/forgot_password/confirm_otp.php?code=$activation_code");
            }
            else
            {
                $_SESSION['status'] = "Email Not Sent! Try Again.";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
        }

        elseif (mysqli_num_rows($check_email_users_query_run) > 0)
        {
            $recovery = "UPDATE users SET otp='$otp', activation_code='$activation_code' WHERE email = '$email'";
            $recovery_run = mysqli_query($con, $recovery);

            if ($recovery_run)
            {
                sendemail_confirmation("$email", "$otp");

                $_SESSION['status'] = "Verification Code Is Sent To Your Email";
                $_SESSION['status_code'] = "success";
                header("Location: ../components/forgot_password/confirm_otp.php?code=$activation_code");
            }
            else
            {
                $_SESSION['status'] = "Email Not Sent! Try Again.";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
        }

        else
        {
			$_SESSION['status'] = "Email Does Not Exist";
			$_SESSION['status_code'] = "warning";
            header("Location: ../components/forgot_password/confirm_email.php");
        }
	}

    if(isset($_POST['confirm_otp'])) {

        $email = $_POST['email'];
        $otp = $_POST['otp'];

		// Email Exists or not in admin db
        $check_email_admin_query = "SELECT * FROM admin WHERE email = '$email' LIMIT 1";
        $check_email_admin_query_run = mysqli_query($con, $check_email_admin_query);
        
		// Email Exists or not in doctor db
        $check_email_doctor_query = "SELECT * FROM doctor WHERE email = '$email' LIMIT 1";
        $check_email_doctor_query_run = mysqli_query($con, $check_email_doctor_query);

		// Email Exists or not in nurse db
        $check_email_nurse_query = "SELECT * FROM nurse WHERE email = '$email' LIMIT 1";
        $check_email_nurse_query_run = mysqli_query($con, $check_email_nurse_query);

		// Email Exists or not in users db
        $check_email_users_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $check_email_users_query_run = mysqli_query($con, $check_email_users_query);

            if (mysqli_num_rows($check_email_admin_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_admin_query_run);

                $row_code = $rowSelect["activation_code"];
                $rowOtp = $rowSelect["otp"];

                if ($rowOtp !== $otp) {
                    $_SESSION['status'] = "Please Provide Correct Verification Code!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/confirm_otp.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE admin SET otp = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);

                    $_SESSION['status'] = "Success Your OTP Is Correct!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
            }

            elseif (mysqli_num_rows($check_email_doctor_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_doctor_query_run);

                $row_code = $rowSelect["activation_code"];
                $rowOtp = $rowSelect["otp"];

                if ($rowOtp !== $otp) {
                    $_SESSION['status'] = "Please Provide Correct Verification Code!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/confirm_otp.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE doctor SET otp = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);

                    $_SESSION['status'] = "Success Your OTP Is Correct!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
            }

            elseif (mysqli_num_rows($check_email_nurse_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_nurse_query_run);

                $row_code = $rowSelect["activation_code"];
                $rowOtp = $rowSelect["otp"];

                if ($rowOtp !== $otp) {
                    $_SESSION['status'] = "Please Provide Correct Verification Code!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/confirm_otp.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE nurse SET otp = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);

                    $_SESSION['status'] = "Success Your OTP Is Correct!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
            }

            elseif (mysqli_num_rows($check_email_users_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_users_query_run);

                $row_code = $rowSelect["activation_code"];
                $rowOtp = $rowSelect["otp"];

                if ($rowOtp !== $otp) {
                    $_SESSION['status'] = "Please Provide Correct Verification Code!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/confirm_otp.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE users SET otp = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);

                    $_SESSION['status'] = "Success Your OTP Is Correct!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
            }

            else {
                $_SESSION['status'] = "Unexpected Error. Try Again!";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
    }
?>