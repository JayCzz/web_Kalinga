<?php
session_start();

include '../components/connection.php';
include '../components/functions.php';

$user_data = check_login($con);

$id = $_GET['edit'];

if (isset($_POST['update_profile'])) {

    $update_username = $_POST['update_username'];
    $update_email = $_POST['update_email'];
    $update_phoneNumber = $_POST['update_phoneNumber'];
    $cpass = $_POST['cpass'];

    if (empty($update_username) || empty($update_email) || empty($update_phoneNumber) || empty($cpass)) {
        $warning_msg[] = 'Please fill out all';
    }

    if ($user_data['password'] != $cpass) {
        $error_msg[] = 'Password is incorrect!';
    } else {
        $update_data = "UPDATE doctor SET username='$update_username', email='$update_email', phoneNumber='$update_phoneNumber'  WHERE id = '$id'";
        mysqli_query($con, $update_data);
        header("Location: doctor_profile_ai.php");
    }
};
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/nurse_profile.css">
</head>

<body>
    <?php
    include '../components/header_nurse.php';
    ?>

    <!-- Inventory Header -->
    <section class="dashboard">
        <h1 class="heading">Update Profile</h1>
    </section>

    <!-- Product Update -->
    <div class="container">
        <div class="admin-product-form-container">

            <form action="" method="post" enctype="multipart/form-data">
                <h3 class="title">User Account Info</h3>
                <div class="label">
                    <h4>Userame:</h4>
                </div>
                <input type="text" class="box" name="update_username" value="<?php echo $user_data['username']; ?>" placeholder="Enter Username" required>

                <div class="label">
                    <h4>Email:</h4>
                </div>
                <input type="text" class="box" name="update_email" value="<?php echo $user_data['email']; ?>" placeholder="Enter Email" required>

                <div class="label">
                    <h4>Phone Number:</h4>
                </div>
                <input type="type" class="box" name="update_phoneNumber" value="0<?php echo $user_data['phoneNumber']; ?>" placeholder="Enter Phone Number" required>

                <div class="label">
                    <h4>Confirm Password:</h4>
                </div>
                <a href="nurse_profile_ai_cpass.php?edit=<?php echo $user_data['id']; ?>" class="btn1">Change Password</a>
                <input type="type" class="box" name="cpass" placeholder="Enter Password" required>
                <input type="submit" value="Update Profile" name="update_profile" class="dynamic-btn">

                <a href="nurse_profile_ai.php" class="dynamic-btn">go back!</a>
            </form>

        </div>
    </div>

    <!-- sweetalert cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>

    <?php include '../components/message.php'; ?>
</body>

</html>