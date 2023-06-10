<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['update_records'])) {

        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $bp = $_POST['bp'];
        $updated = $_POST['updated'];

        if(empty($height) || empty($weight) || empty($bp) || empty($updated)) {
            $warning_msg[] = 'please fill out all';
        }
        
        else {
            $update_data = "UPDATE users SET height='$height', weight='$weight', bp='$bp', updated='$updated'  WHERE id = '$id'";
            $upload = mysqli_query($con, $update_data);
            header("location:nurse_preconsultation_users_profile.php?edit=$id");
        }
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users Preconsultation</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/nurse_preconsultation.css">
    </head>

    <body>
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Inventory Header -->
        <?php
            $select = mysqli_query($con, "SELECT * FROM users  WHERE id = '$id'");
            while($row = mysqli_fetch_assoc($select)){
        ?>
        <section class="dashboard">
            <h1 class="heading">Update Preconsultation Records: <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?> (<?php echo $row['familyNumber']; ?>)</h1>
        </section>

        <!-- Product Update -->
        <div class="container">
            <div class="admin-product-form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">User Records</h3>
                    <div class="label">
                        <h4>Height:</h4>
                    </div>
                    <input type="text" class="box" name="height" placeholder="Enter Users Height (cm)" required>
                    
                    <div class="label">
                        <h4>Weight:</h4>
                    </div>
                    <input type="text" class="box" name="weight" placeholder="Enter Users Weight (kg)" required>
                    
                    <div class="label">
                        <h4>Blood Pressure:</h4>
                    </div>
                    <input type="text" class="box" name="bp" placeholder="Enter Users Blood Pressure" required>
                    
                    <div class="label">
                        <h4>Date Today:</h4>
                    </div>
                    <input type="date" class="box" name="updated" placeholder="Enter Date (yyyy-mm-dd)" required>
                    <input type="submit" value="Update Records" name="update_records" class="btn">
                    <a href="nurse_preconsultation_users_profile.php?edit=<?php echo $row['id']; ?>" class="btn">go back!</a>
                </form>
            </div>
        </div>
        <?php }; ?>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>

		<?php include '../components/message.php'; ?>
    </body>
</html>