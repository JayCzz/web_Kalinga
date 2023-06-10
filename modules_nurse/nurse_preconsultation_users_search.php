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
        <title>Preconsultation</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/nurse_preconsultation.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_nurse.php'; 
        ?>

        <!-- Preconsultation -->
        <section class="dashboard">
            <h1 class="heading">Preconsultation</h1>
        </section>
        
        <!-- Search Bar -->
        <div class="container">
            <div class="admin-product-form-container">
                <form action="" method="post" enctype="multipart/form-data">
                    <h3 class="title">Enter Family Number</h3>
                    <input type="text" name="search" placeholder="search family number..." class="box" required>
                    <input type="submit" name="submit" value="search" class="btn">
                </form>
            </div>
        </div>

        <section class="dashboard">

            <!-- Users List -->
            <div class="container">
                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Family Number</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php if(isset($_POST['submit'])) {
                            $search_item = $_POST['search'];
                            $select_users = mysqli_query($con, "SELECT * FROM `users` WHERE familyNumber LIKE '%{$search_item}%' ORDER BY firstName ASC") or die('query failed');
                            if(mysqli_num_rows($select_users) > 0) { 
                                while($fetch_user = mysqli_fetch_assoc($select_users)) { 
                        ?>
                        <tr>
                            <td>
                                <?php echo $fetch_user['familyNumber']; ?>
                            </td>

                            <td>
                                <?php echo $fetch_user['firstName']; ?> <?php echo $fetch_user['lastName']; ?>
                            </td>

                            <td>
                                <a href="nurse_preconsultation_users_profile.php?edit=<?php echo $fetch_user['id']; ?>" class="btns"> <i class="fa fa-eye"></i> View Records </a>
                            </td>
                        </tr>
                        <tr>
                            <?php
                                        }
                                    }
                                    else {
                                        echo '<td colspan="3" class="empty">no result found!</td>';
                                    }
                                }
                                else {
                                    echo '<td colspan="3" class="empty">search something!</td>';
                                }
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>