<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/admin_index.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>

        <!-- Dashboard -->
        <section class="dashboard">
            <h1 class="heading">Search Results:</h1>
        </section>

        <?php
            if(isset($_POST['search_box']) or isset($_POST['search_btn'])) {
                $search = $_POST['search_box'];
                $sql = "SELECT * FROM `users` WHERE firstName LIKE '%{$search}%' OR lastName LIKE '%{$search}%' ORDER BY firstName DESC";
                $result = mysqli_query($con,$sql);
                if($result) {
                    if(mysqli_num_rows($result)>0); {
                        $row=mysqli_fetch_assoc($result);
                        
        ?>

        <div class="box">
            <p>name : <span><?= $row['firstName']; ?> <?= $row['lastName']; ?></span></p>
            <p>family number : <span><?= $row['familyNumber']; ?></span></p>
            <form action="" method="POST">
                <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                <input type="submit" value="delete user" onclick="return confirm('delete this user?');" name="delete" class="delete-btn">
            </form>
        </div>

        <?php
                    }
                    else {
                        echo '<p class="empty">results not found!</p>';
                    }
                }
            }
        ?>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>