<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

	$user_data = check_login($con);

    $id = $_GET['edit'];

    if(isset($_POST['add_product'])) {

        $prescription_name = $_POST['prescription_name'];
        $address = $_POST['address'];
        $date = $_POST['date'];
        $familyNumber = $_POST['familyNumber'];
        $cnumber = $_POST['cnumber'];
        $prescription = $_POST['prescription'];
    
        if(empty($prescription_name) || empty($address)) {
            $warning_msg[] = 'please fill out all';
        }

        else {
            $insert = "INSERT INTO prescriptions(name, address, date, familyNumber, cnumber, prescription) VALUES('$prescription_name', '$address', '$date', '$familyNumber', '$cnumber', '$prescription')";
            $upload = mysqli_query($con,$insert);
            header('location:doctor_prescription_users_search.php');
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

        <!-- Prescription -->
        <section class="dashboard">
            <h1 class="heading">Prescription</h1>
        </section>

        <!-- Prescription Form -->
        <section class="property-form">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <?php
                    $select = mysqli_query($con, "SELECT * FROM users  WHERE id = '$id'");
                    while($row = mysqli_fetch_assoc($select)){
                ?>
                <h3>Prescription Form</h3>
                <div class="box">
                    <p>For <span>*</span></p>
                    <input type="text" name="prescription_name" value="<?php echo $row['firstName']; ?> <?php echo $row['lastName']; ?>" placeholder="Enter Patient Name" class="input" readonly>
                </div>
                <div class="box">
                    <p>Address <span>*</span></p>
                    <input type="text" name="address" value="Nangka, Marikina City" placeholder="Enter Patient Adress" class="input" readonly>
                </div>
                <div class="flex">
                    <div class="box">
                        <p>Family Number <span>*</span></p>
                        <input type="text" name="familyNumber" value="<?php echo $row['familyNumber']; ?>" class="input" readonly>
                    </div>
                    <div class="box">
                        <p>Date <span>*</span></p>
                        <input type="date" name="date" placeholder="Enter Date Today" class="input" required>
                    </div>
                </div>
                <?php }; ?>
                <div class="box">
                    <p>Prescription <span>*</span></p>
                    <textarea name="prescription" maxlength="1000" class="input" required cols="30" rows="10" placeholder="Write about the prescription..."></textarea>
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