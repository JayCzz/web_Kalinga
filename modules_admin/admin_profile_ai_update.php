<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_profile'])) {

        $update_username = $_POST['update_username'];
        $update_email = $_POST['update_email'];
        $update_phoneNumber = $_POST['update_phoneNumber'];
		$cpass = $_POST['cpass'];

        if(empty($update_username) || empty($update_email) || empty($update_phoneNumber) || empty($cpass)) {
            $warning_msg[] = 'Please fill out all';
        }

        if($user_data['password'] != $cpass) {
            $error_msg[] = 'Password is incorrect!';
        }
        
        else {
            $update_data = "UPDATE admin SET username='$update_username', email='$update_email', phoneNumber='$update_phoneNumber'  WHERE id = '$id'";
            mysqli_query($con, $update_data);
			header("Location: admin_profile_ai.php");
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
        <link rel="stylesheet" href="../css/doctor_profile.css">
    </head>

    <body>
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Update Profile</h1>
        </section>

        <!-- Product Update -->
        <div class="container">
            <div class="admin-product-form-container">

                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                        include '../components/profile/profile_ai_update.php';
                    ?>
                    <a href="admin_profile_ai_cpass.php?edit=<?php echo $user_data['id']; ?>" class="btn">Change Password</a>
                    <a href="admin_profile_ai.php" class="btn">go back!</a>
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