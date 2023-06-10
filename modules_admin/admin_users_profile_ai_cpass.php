<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_profile'])) {

        $oldpass = $_POST['oldpass'];
        $update_password = $_POST['update_password'];

        if(empty($update_password)) {
            $warning_msg[] = 'Please fill out all';
        }

        if($user_data['password'] != $oldpass) {
            $error_msg[] = 'Your password is incorrect!';
        }
        
        else {
            $update_data = "UPDATE users SET password='$update_password'  WHERE id = '$id'";
            mysqli_query($con, $update_data);
			header("Location: admin_users_profile_ai.php?edit=$id");
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

        <!-- header css file link  -->
        <link rel="stylesheet" href="../css/header.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_users_profile.css">
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
                    <h3 class="title">User Account Info</h3>
                    
                    <div class="label">
                        <h4>User New Password:</h4>
                    </div>
                    <input type="text" class="box" name="update_password" placeholder="Enter User New Password" required>
                    
                    <div class="label">
                        <h4>Confirm Your Password:</h4>
                    </div>
                    <input type="type" class="box" name="oldpass" placeholder="Enter Your Password" required>
                    <input type="submit" value="Update Password" name="update_profile" class="btn">
                    <a href="admin_users_profile_ai.php?edit=<?php echo $id; ?>" class="btn">go back!</a>
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