<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_profile'])) {

        $update_firstName = $_POST['update_firstName'];
        $update_lastName = $_POST['update_lastName'];
        $update_birthday = $_POST['update_birthday'];
        $update_age = $_POST['update_age'];
        $update_sex = $_POST['update_sex'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = '../uploaded_img/'.$product_image;
		$cpass = $_POST['cpass'];

        if(empty($update_firstName) || empty($update_lastName) || empty($update_birthday) || empty($update_age) || empty($update_sex)) {
            $warning_msg[] = 'Please fill out all';
        }

        if($user_data['password'] != $cpass) {
            $error_msg[] = 'Password is incorrect';
        }
        
        else {
            $update_data = "UPDATE admin SET firstName='$update_firstName', lastName='$update_lastName', birthday='$update_birthday', age='$update_age', sex='$update_sex', image='$product_image'  WHERE id = '$id'";
            mysqli_query($con, $update_data);
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
			header("Location: admin_profile_pi.php");
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
                        include '../components/profile/profile_pi_update.php';
                    ?>
                    <a href="admin_profile_pi.php" class="btn">go back!</a>
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