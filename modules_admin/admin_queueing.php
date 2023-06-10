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

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/nurse_queueing.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_admin.php'; 
        ?>
        <!-- Waiting On Queue -->
        <section class="dashboard">
            <h1 class="heading">Queue Option</h1>

            <!-- Queue List -->
            <form action="../components/code.php" method="POST">
                <div class="container">
                    <div class="product-display">
                        <table class="product-display-table">
                            <thead>
                                <tr>
                                    <th style="width:10px;">
                                        <button type="submit" name="delete_multiple" class="btns"><i class="fas fa-trash"></i></button>
                                    </th>
                                    <th>Queue Number</th>
                                </tr>
                            </thead>

                            <?php
                                $select_users = mysqli_query($con, "SELECT * FROM queue_id_value ORDER BY id ASC");
                                if (mysqli_num_rows($select_users) > 0) {
                                    while ($fetch_user = mysqli_fetch_assoc($select_users)) {
                            ?>

                            <tr>
                                <td style="width:10px;">
                                    <input type="checkbox" name="delete_id[]" value="<?php echo $fetch_user['id']; ?>">
                                </td>
                                <td>
                                    Queue 000<?php echo $fetch_user['id']; ?>
                                </td>
                            </tr>

                            <tr>
                                <?php
                                        }
                                    }
                                    else {
                                        echo '<td colspan="3" class="empty">No people on queue!</td>';
                                    }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>    
            </form>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>