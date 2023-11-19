<?php
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    if(isset($_POST['confirm_password'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

		// Email Exists or not
        $check_email_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $check_email_query_run = mysqli_query($con, $check_email_query);

            if (mysqli_num_rows($check_email_query_run) == 1) {
                $rowSelect = mysqli_fetch_assoc($check_email_query_run);

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