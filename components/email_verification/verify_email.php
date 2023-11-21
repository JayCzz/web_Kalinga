<?php
    session_start();

    include '../connection.php';
    include '../functions.php';

    if (isset($_GET['token']))
    {
        $token = $_GET['token'];
        
        $verify_admin_query = "SELECT verify_token, verify_status FROM admin WHERE verify_token = '$token' LIMIT 1";
        $verify_admin_query_run = mysqli_query($con, $verify_admin_query);
        
        if(mysqli_num_rows($verify_admin_query_run) > 0)
        {
            $row = mysqli_fetch_array($verify_admin_query_run);
            if($row['verify_status'] == "0")
            {
                $clicked_token = $row['verify_token'];
                $update_query = "UPDATE admin SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($con, $update_query);

                if($update_query_run)
                {
                    $_SESSION['status'] = "Your Account has been verified Successfully.!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../../admin_login.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Verification Failed.!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../../admin_login.php");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email Already Verified. please";
                $_SESSION['status_code'] = "success";
                header("Location: ../../admin_login.php");
                exit(0);
            }
        }
        
        $verify_doctor_query = "SELECT verify_token, verify_status FROM doctor WHERE verify_token = '$token' LIMIT 1";
        $verify_doctor_query_run = mysqli_query($con, $verify_doctor_query);
        
        if(mysqli_num_rows($verify_doctor_query_run) > 0)
        {
            $row = mysqli_fetch_array($verify_doctor_query_run);
            if($row['verify_status'] == "0")
            {
                $clicked_token = $row['verify_token'];
                $update_query = "UPDATE doctor SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($con, $update_query);

                if($update_query_run)
                {
                    $_SESSION['status'] = "Your Account has been verified Successfully.!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../../doctor_login.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Verification Failed.!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../../doctor_login.php");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email Already Verified. please";
                $_SESSION['status_code'] = "success";
                header("Location: ../../doctor_login.php");
                exit(0);
            }
        }
        
        $verify_nurse_query = "SELECT verify_token, verify_status FROM nurse WHERE verify_token = '$token' LIMIT 1";
        $verify_nurse_query_run = mysqli_query($con, $verify_nurse_query);
        
        if(mysqli_num_rows($verify_nurse_query_run) > 0)
        {
            $row = mysqli_fetch_array($verify_nurse_query_run);
            if($row['verify_status'] == "0")
            {
                $clicked_token = $row['verify_token'];
                $update_query = "UPDATE nurse SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($con, $update_query);

                if($update_query_run)
                {
                    $_SESSION['status'] = "Your Account has been verified Successfully.!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../../nurse_login.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Verification Failed.!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../../nurse_login.php");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email Already Verified. please";
                $_SESSION['status_code'] = "success";
                header("Location: ../../nurse_login.php");
                exit(0);
            }
        }

        $verify_citizen_query = "SELECT verify_token, verify_status FROM users WHERE verify_token = '$token' LIMIT 1";
        $verify_citizen_query_run = mysqli_query($con, $verify_citizen_query);

        if(mysqli_num_rows($verify_citizen_query_run) > 0)
        {
            $row = mysqli_fetch_array($verify_citizen_query_run);
            if($row['verify_status'] == "0")
            {
                $clicked_token = $row['verify_token'];
                $update_query = "UPDATE users SET verify_status = '1' WHERE verify_token = '$clicked_token' LIMIT 1";
                $update_query_run = mysqli_query($con, $update_query);

                if($update_query_run)
                {
                    $_SESSION['status'] = "Your Account has been verified Successfully.!";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../../citizen_login.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Verification Failed.!";
                    $_SESSION['status_code'] = "error";
                    header("Location: ../../citizen_login.php");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email Already Verified. please";
                $_SESSION['status_code'] = "success";
                header("Location: ../../citizen_login.php");
                exit(0);
            }
        }

        else
        {
            $_SESSION['status'] = "This Token does not Exists";
            $_SESSION['status_code'] = "warning";
            header("Location: ../../welcome_page.php");
            exit(0);
        }
    }
    else
    {
        header("Location: ../../citizen_login.php");
    }

?>