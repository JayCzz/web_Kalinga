<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_POST['add_product'])) {

        $name = $_POST['name'];
        $queue = $user_data['user_id'];
		$type = $_POST['type'];
    
        if(empty($name)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO queue_list(name, status, qnumber, type) VALUES('$name', 'Waiting', '$queue', '$type')";
            $upload = mysqli_query($con,$insert);
            header("location:citizen_queueing_registration_two.php?edit=$queue");
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Queueing Registration</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/citizen_queueing.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_citizen.php'; 
        ?>

        <!-- Queueing Registration -->
        <?php
            include '../components/queueing/queueing_registration_one.php'; 
        ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>