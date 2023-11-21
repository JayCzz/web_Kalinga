<?php
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    if(isset($_POST['confirm_password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

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

                if ($password !== $confirmPassword) {
                    $_SESSION['status'] = "New Password & Confirm Password Don't Match!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE admin SET password = '$password', activation_code = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);
                    
                    $_SESSION['status'] = "Success! You Changed Your Pasword!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../admin_login");
                }
            }

            elseif (mysqli_num_rows($check_email_doctor_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_doctor_query_run);

                $row_code = $rowSelect["activation_code"];

                if ($password !== $confirmPassword) {
                    $_SESSION['status'] = "New Password & Confirm Password Don't Match!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE doctor SET password = '$password', activation_code = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);
                    
                    $_SESSION['status'] = "Success! You Changed Your Pasword!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../doctor_login");
                }
            }

            elseif (mysqli_num_rows($check_email_nurse_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_nurse_query_run);

                $row_code = $rowSelect["activation_code"];

                if ($password !== $confirmPassword) {
                    $_SESSION['status'] = "New Password & Confirm Password Don't Match!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE nurse SET password = '$password', activation_code = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);
                    
                    $_SESSION['status'] = "Success! You Changed Your Pasword!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../nurse_login");
                }
            }

            elseif (mysqli_num_rows($check_email_users_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_users_query_run);

                $row_code = $rowSelect["activation_code"];

                if ($password !== $confirmPassword) {
                    $_SESSION['status'] = "New Password & Confirm Password Don't Match!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../components/forgot_password/change_password.php?code=$row_code");
                }
                else {
                    $update_data = "UPDATE users SET password = '$password', activation_code = '' WHERE email = '$email'";
                    $upload = mysqli_query($con, $update_data);
                    
                    $_SESSION['status'] = "Success! You Changed Your Pasword!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../citizen_login");
                }
            }

            else {
                $_SESSION['status'] = "Unexpected Error. Try Again!";
                $_SESSION['status_code'] = "error";
                header("Location: ../components/forgot_password/confirm_email.php");
            }
    }
?>