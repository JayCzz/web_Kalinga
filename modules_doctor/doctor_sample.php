<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['add_product'])) {

        $consultation_name = $_POST['consultation_name'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $familyNumber = $_POST['familyNumber'];
        $cnumber = $_POST['cnumber'];
        $consultation = $_POST['consultation'];
    
        if(empty($consultation_name) || empty($address)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO consultations(name, address, date, familyNumber, cnumber, consultation) VALUES('$consultation_name', '$address', '$date', '$familyNumber', '$cnumber', '$consultation')";
            $upload = mysqli_query($con,$insert);
            header('location:admin_inventory.php');
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>

		<!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

		<!-- google fonts link  -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../css/doctor_consultation_form.css">
    </head>

    <body>
        <!-- Admin Header -->
        <?php
            include '../components/header_doctor.php'; 
        ?>

        <!-- Consultation -->
        <section class="dashboard">
            <h1 class="heading">Consultation</h1>
        </section>

        <!-- Consultation Form -->
        <section class="property-form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM users  WHERE id = '$id'");
                    while($row = mysqli_fetch_assoc($select)){
                ?>
                <h3>Consultation Form</h3>
                <div class="box">
                    <p>For <span>*</span></p>
                    <input type="text" name="consultation_name" value="<?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>" placeholder="Enter Patient Name" class="input" readonly>
                </div>
                <div class="flex">
                    <div class="box">
                        <p>Address <span>*</span></p>
                        <input type="text" name="address" value="Nangka, Marikina City" placeholder="Enter Patient Adress" class="input" readonly>
                    </div>
                    <div class="box">
                        <p>Date <span>*</span></p>
                        <input type="date" name="date" placeholder="Enter Date Today" class="input" required>
                    </div>
                    <div class="box">
                        <p>Family Number <span>*</span></p>
                        <input type="text" name="familyNumber" value="<?php echo $row['familyNumber']; ?>" class="input" readonly>
                    </div>
                    <div class="box">
                        <p>Consultation Number <span>*</span></p>
                        <input type="number" name="cnumber" value="<?php echo $row['user_id']; ?>" class="input" readonly>
                    </div>
                </div>
                <?php }; ?>
                <div class="box">
                    <p>Consultation <span>*</span></p>
                    <textarea name="consultation" maxlength="1000" class="input" required cols="30" rows="10" placeholder="Write about the consultation..."></textarea>
                </div>

                <div class="updt">
                    <input type="submit" name="add_product" class="inline-btn" value="Add Product">
                </div>
            </form>
        </section>

        <!-- custom js file link  -->
        <script src="../js/script.js"></script>

        <?php include '../components/message.php'; ?>
    </body>
</html>