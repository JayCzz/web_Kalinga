<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        mysqli_query($con, "DELETE FROM qr_code WHERE id = $id");
        header('location:doctor_qr_page.php');
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Family List</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/qr.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_doctor.php'; 
        ?>

        <!-- Family List -->
        <div class="container">
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                        <tr>
                            <th>QR Code</th>
                            <th>Family Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php if(isset($_POST['submit'])) {
                        $search_item = $_POST['search'];
                        $select_users = mysqli_query($con, "SELECT * FROM `qr_code` WHERE name LIKE '%{$search_item}%' ORDER BY name ASC") or die('query failed');
                        if(mysqli_num_rows($select_users) > 0) { 
                            while($row = mysqli_fetch_assoc($select_users)) { 
                    ?>
                        <tr>
                            <td>
                                <img src="../uploaded_qr/<?php echo $row['image']; ?>" height="100" alt="">
                            </td>

                            <td>
                                <?php echo $row['name']; ?>
                            </td>

                            <td>
                                <a href="admin_qr_page_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                                <a href="doctor_qr_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                            </td>
                        </tr>
                            <?php
                                        }
                                    }
                                    else {
                                        echo '<td colspan="3" class="empty">no result found!</td>';
                                    }
                                } 
                                else { 
                            ?>
                            <?php $select = mysqli_query($con, "SELECT * FROM qr_code ORDER BY name ASC");
                                while($row = mysqli_fetch_assoc($select)) { 
                            ?>
                                <tr>
                                    <td>
                                        <img src="../uploaded_qr/<?php echo $row['image']; ?>" height="100" alt="">
                                    </td>
        
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
        
                                    <td>
                                        <a href="admin_qr_page_update.php?edit=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-edit"></i> edit </a>
                                        <a href="admin_qr_page.php?delete=<?php echo $row['id']; ?>" class="btns"> <i class="fas fa-trash"></i> delete </a>
                                    </td>
                                </tr>
                            <?php 
                                    }
                                }
                            ?>
                </table>
            </div>
        </div>
        
        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
    </body>
</html>
