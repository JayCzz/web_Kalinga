<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_POST['add_product'])) {

        $name = $_POST['name'];
        $queue = $user_data['user_id'];
    
        if(empty($name)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO queue_list(name, status, qnumber) VALUES('$name', 'next', '$queue')";
            $upload = mysqli_query($con,$insert);
            header("location:citizen_index.php?edit=$queue");
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Queueing</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

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

        <!-- Calendar -->
        <section class="dashboard">
            <h1 class="heading">Queueing Registration</h1>
        </section>

        <!-- Queueing -->
        <div class="container">
            <div class="admin-product-form-container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3 class="title">Get Your Queue Number Here</h3>
                    <input type="text" class="box" name="name" placeholder="Enter your name" required>
                
                    <input type="submit" name="add_product" class="btn" value="Add Queue">
                </form>
            </div>
        </div>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>