<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];
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
            <h1 class="heading">Preconsultation: <?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?> (<?php echo $row['familyNumber']; ?>)</h1>
        
            <div class="info">
                <div class="box-container">
                    <div class="box">
                        <h3>AGE</h3>
                        <p>
                            <?php echo $row['age']; ?>
                        </p>
                    </div>

                    <div class="box">
                        <h3>SEX</h3>
                        <p>
                            <?php echo $row['sex']; ?>
                        </p>
                    </div>

                    <div class="box">
                        <h3>HEIGHT</h3>
                        <p>
                            <?php
                                if($row['height'] == '0') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo "$row[height] cm"; 
                                } 
                            ?>
                        </p>
                    </div>

                    <div class="box">
                        <h3>WEIGHT</h3>
                        <p>
                            <?php
                                if($row['weight'] == '0') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo "$row[weight] kg"; 
                                } 
                            ?>
                        </p>
                    </div>
                    
                    <div class="box">
                        <h3>BLOOD PRESSURE</h3>
                        <p>
                            <?php
                                if($row['bp'] == '') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo $row['bp']; 
                                } 
                            ?>
                        </p>
                    </div>

                    <div class="box">
                        <h3>DATE UPDATED</h3>
                        <p>
                            <?php
                                if($row['updated'] == '0000-00-00') {
                                    echo 'No Recorded Data';
                                }
                                else {
                                    echo $row['updated']; 
                                } 
                            ?>
                        </p>
                    </div>
                </div>

                <div class="updt">
                    <a href="nurse_preconsultation_users_update.php?edit=<?php echo $row['id']; ?>" class="inline-btn">update records</a>
                </div>
            </div>
        </section>
        <?php }; ?>
		
		<!-- sweetalert cdn link -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>
		
    </body>
</html>