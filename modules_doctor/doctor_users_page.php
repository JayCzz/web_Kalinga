<?php 
    session_start();

    include '../components/connection.php';
	include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM inventory WHERE id = $id");
        header('location:doctor_users_page.php');
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/inventory.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_doctor.php'; 
        ?>

        <!-- Inventory Header -->
        <section class="dashboard">
            <h1 class="heading">Users List</h1>

            <!-- Product List -->
            <div class="container">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM users ORDER BY familyNumber ASC");
                ?>

                <div class="product-display">
                    <table class="product-display-table">
                        <thead>
                            <tr>
                                <th>Family Number</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        
                        <?php while($row = mysqli_fetch_assoc($select)){ ?>
                            <tr>
                                <td>
                                    <?php echo $row['familyNumber']; ?>
                                </td>

                                <td>
                                    <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>
                                </td>

                                <td>
                                    <?php echo $row['age']; ?>
                                </td>

                                <td>
                                    <a href="doctor_users_profile.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fa fa-eye"></i> See Details </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </section>

        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
