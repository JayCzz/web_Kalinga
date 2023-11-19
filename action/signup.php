<?php
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    if(isset($_POST['admin_signup']))
    {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $suffix = $_POST['suffix'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $adminNumber = $_POST['adminNumber'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $verify_token = md5(rand());

        if (!empty($firstName) && !empty($middleName) && !empty($lastName) && !empty($birthday) && !empty($age) && !empty($adminNumber) && !empty($username) && !empty($email) && !empty($phoneNumber) && !empty($password) && !empty($confirmPassword) && !is_numeric($firstName) && !is_numeric($middleName) && !is_numeric($lastName) && !is_numeric($username) && !is_numeric($email))
        {
            // Email Exists or not
            $check_email_query = "SELECT email FROM admin WHERE email = '$email' LIMIT 1";
            $check_email_query_run = mysqli_query($con, $check_email_query);

            if (mysqli_num_rows($check_email_query_run) > 0)
            {
                $_SESSION['status'] = "Email Already Registered";
                $_SESSION['status_code'] = "warning";
                header("Location: ../admin_signup.php");
            }
            else 
            {
                // Insert User / Save to database
                $user_id = random_num(20);
                $query = "INSERT INTO admin (user_id, type, firstName, middleName, middleInitial, lastName, suffix, birthday, age, sex, adminNumber, username, email, phoneNumber, password, verify_token) values ('$user_id', 'Admin', '$firstName', '$middleName', '$middleName', '$lastName', '$suffix', '$birthday', '$age', '$sex', '$adminNumber', '$username', '$email', '$phoneNumber', '$password', '$verify_token')"; 
                $query_run = mysqli_query($con, $query);

                if ($query_run)
                {
                    sendemail_verify("$firstName", "$email", "$verify_token");

                    $_SESSION['status'] = "Registration Successfull! Please verify your Email Address.";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../admin_login.php");
                }
                else
                {
                    $_SESSION['status'] = "Registration Failed";
                    $_SESSION['status_code'] = "warning";
                    header("Location: ../admin_signup.php");
                }
            }
        }
        else {
            $_SESSION['status'] = 'Please enter some valid information!';
            $_SESSION['status_code'] = "warning";
            header("Location: ../admin_signup.php");
        }
    }

    if(isset($_POST['doctor_signup']))
    {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $suffix = $_POST['suffix'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $doctorNumber = $_POST['doctorNumber'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $verify_token = md5(rand());

        if (!empty($firstName) && !empty($middleName) && !empty($lastName) && !empty($birthday) && !empty($age) && !empty($doctorNumber) && !empty($username) && !empty($email) && !empty($phoneNumber) && !empty($password) && !empty($confirmPassword) && !is_numeric($firstName) && !is_numeric($middleName) && !is_numeric($lastName) && !is_numeric($username) && !is_numeric($email))
        {
            // Email Exists or not
            $check_email_query = "SELECT email FROM doctor WHERE email = '$email' LIMIT 1";
            $check_email_query_run = mysqli_query($con, $check_email_query);

            if (mysqli_num_rows($check_email_query_run) > 0)
            {
                $_SESSION['status'] = "Email Already Registered";
                $_SESSION['status_code'] = "warning";
                header("Location: ../doctor_signup.php");
            }
            else 
            {
                // Insert User / Save to database
                $user_id = random_num(20);
                $query = "INSERT INTO doctor (user_id, type, firstName, middleName, middleInitial, lastName, suffix, birthday, age, sex, doctorNumber, username, email, phoneNumber, password, verify_token) values ('$user_id', 'Doctor', '$firstName', '$middleName', '$middleName', '$lastName', '$suffix', '$birthday', '$age', '$sex', '$doctorNumber', '$username', '$email', '$phoneNumber', '$password', '$verify_token')"; 
                $query_run = mysqli_query($con, $query);

                if ($query_run)
                {
                    sendemail_verify("$firstName", "$email", "$verify_token");

                    $_SESSION['status'] = "Registration Successfull! Please verify your Email Address.";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../doctor_login.php");
                }
                else
                {
                    $_SESSION['status'] = "Registration Failed";
                    $_SESSION['status_code'] = "warning";
                    header("Location: ../doctor_signup.php");
                }
            }
        }
        else {
            $_SESSION['status'] = 'Please enter some valid information!';
            $_SESSION['status_code'] = "warning";
            header("Location: ../doctor_signup.php");
        }
    }

    if(isset($_POST['nurse_signup']))
    {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $suffix = $_POST['suffix'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $nurseNumber = $_POST['nurseNumber'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $verify_token = md5(rand());

        if (!empty($firstName) && !empty($middleName) && !empty($lastName) && !empty($birthday) && !empty($age) && !empty($nurseNumber) && !empty($username) && !empty($email) && !empty($phoneNumber) && !empty($password) && !empty($confirmPassword) && !is_numeric($firstName) && !is_numeric($middleName) && !is_numeric($lastName) && !is_numeric($username) && !is_numeric($email))
        {
            // Email Exists or not
            $check_email_query = "SELECT email FROM nurse WHERE email = '$email' LIMIT 1";
            $check_email_query_run = mysqli_query($con, $check_email_query);

            if (mysqli_num_rows($check_email_query_run) > 0)
            {
                $_SESSION['status'] = "Email Already Registered";
                $_SESSION['status_code'] = "warning";
                header("Location: ../nurse_signup.php");
            }
            else 
            {
                // Insert User / Save to database
                $user_id = random_num(20);
                $query = "INSERT INTO nurse (user_id, type, firstName, middleName, middleInitial, lastName, suffix, birthday, age, sex, nurseNumber, username, email, phoneNumber, password, verify_token) values ('$user_id', 'Nurse', '$firstName', '$middleName', '$middleName', '$lastName', '$suffix', '$birthday', '$age', '$sex', '$nurseNumber', '$username', '$email', '$phoneNumber', '$password', '$verify_token')"; 
                $query_run = mysqli_query($con, $query);

                if ($query_run)
                {
                    sendemail_verify("$firstName", "$email", "$verify_token");

                    $_SESSION['status'] = "Registration Successfull! Please verify your Email Address.";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../nurse_login.php");
                }
                else
                {
                    $_SESSION['status'] = "Registration Failed";
                    $_SESSION['status_code'] = "warning";
                    header("Location: ../nurse_signup.php");
                }
            }
        }
        else {
            $_SESSION['status'] = 'Please enter some valid information!';
            $_SESSION['status_code'] = "warning";
            header("Location: ../nurse_signup.php");
        }
    }

    if(isset($_POST['citizen_signup']))
    {
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $lastName = $_POST['lastName'];
        $suffix = $_POST['suffix'];
        $birthday = $_POST['birthday'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $familyNumber = $_POST['familyNumber'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $verify_token = md5(rand());

        if (!empty($firstName) && !empty($middleName) && !empty($lastName) && !empty($birthday) && !empty($age) && !empty($familyNumber) && !empty($username) && !empty($email) && !empty($phoneNumber) && !empty($password) && !empty($confirmPassword) && !is_numeric($firstName) && !is_numeric($middleName) && !is_numeric($lastName) && !is_numeric($username) && !is_numeric($email))
        {
            // Email Exists or not
            $check_email_query = "SELECT email FROM users WHERE email = '$email' LIMIT 1";
            $check_email_query_run = mysqli_query($con, $check_email_query);

            if (mysqli_num_rows($check_email_query_run) > 0)
            {
                $_SESSION['status'] = "Email Already Registered";
                $_SESSION['status_code'] = "warning";
                header("Location: ../citizen_signup.php");
            }
            else 
            {
                // Insert User / Save to database
                $user_id = random_num(20);
                $query = "INSERT INTO users (user_id, type, firstName, middleName, middleInitial, lastName, suffix, birthday, age, sex, familyNumber, username, email, phoneNumber, password, verify_token) values ('$user_id', 'Citizen', '$firstName', '$middleName', '$middleName', '$lastName', '$suffix', '$birthday', '$age', '$sex', '$familyNumber', '$username', '$email', '$phoneNumber', '$password', '$verify_token')"; 
                $query_run = mysqli_query($con, $query);

                if ($query_run)
                {
                    sendemail_verify("$firstName", "$email", "$verify_token");

                    $_SESSION['status'] = "Registration Successfull! Please verify your Email Address.";
                    $_SESSION['status_code'] = "success";
                    header("Location: ../citizen_login.php");
                }
                else
                {
                    $_SESSION['status'] = "Registration Failed";
                    $_SESSION['status_code'] = "warning";
                    header("Location: ../citizen_signup.php");
                }
            }
        }
        else {
            $_SESSION['status'] = 'Please enter some valid information!';
            $_SESSION['status_code'] = "warning";
            header("Location: ../citizen_signup.php");
        }
    }

?>