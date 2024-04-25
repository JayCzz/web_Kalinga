<?php
session_start();

include '../components/connection.php';
include '../components/functions.php';

$user_data = check_login($con);

$id = $_GET['edit'];

if (isset($_POST['add_product'])) {

    $prescription_name = $_POST['consultation_name'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $familyNumber = $_POST['familyNumber'];
    $cnumber = $_POST['cnumber'];
    $prescription = $_POST['consultation'];

    if (empty($prescription_name) || empty($address)) {
        $warning_msg[] = 'please fill out all';
    } else {
        $insert = "INSERT INTO consultation(name, address, date, familyNumber, cnumber, consultation) VALUES('$prescription_name', '$address', '$date', '$familyNumber', '$cnumber', '$prescription')";
        $upload = mysqli_query($con, $insert);
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
    <link rel="stylesheet" href="../css/doctor_prescription.css">



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
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <h3>Consultation Form</h3>
                <hr size="3" width="100%" color="black">

                <!-- FIRST LINE -->
                <div>
                    <h1 class="title1">Doctor's Information</h1>
                    <h1 class="title">Section 1</h1>
                </div>

                <div class="flex">
                    <div class="box">
                        <p>Full Name</p>
                        <input type="text" name="doctorName" value="Stehpen Jones" class="input" readonly>
                    </div>
                    <div class="box">
                        <p>License No.</p>
                        <input type="text" name="licenseNumber" value="0053272" class="input" readonly>
                    </div>
                </div>
                <!-- 1st LINE -->
                <br>
                <br>
                <hr size="3" width="100%" color="black">

                <!-- SECOND LINE -->
                <div>
                    <h1 class="title1">Citizen's Information</h1>
                    <h1 class="title">Section 2</h1>
                </div>

                <div class="flex">
                    <div class="box">
                        <p>For </p>
                        <input type="text" name="patient_name" value="John Cena" placeholder="Patient Name" class="input" readonly>
                    </div>

                    <div class="box">
                        <p>Gender</p>
                        <input type="text" name="gender" value="Male" placeholder="Patient Gender" class="input" readonly>
                    </div>

                    <div class="box">
                        <p>Address</p>
                        <input type="text" name="address" value="Nangka, Marikina City" placeholder="Enter Patient Adress" class="input" readonly>
                    </div>

                    <div class="box">
                        <p>Age</p>
                        <input type="text" name="age" value="21" placeholder="Patient Age" class="input" readonly>
                    </div>

                    <div class="box">
                        <p>Phone #</p>
                        <input type="text" name="phoneNumber" value="09389380621" placeholder="Patient Number" class="input" readonly>
                    </div>

                    <div class="box">
                        <p>Date of Issue <span>*</span></p>
                        <input type="date" name="date" placeholder="Enter Date Today" class="input" required>
                    </div>
                </div>


                <!-- 2nd line end-->

                <br>
                <br>
                <hr size="3" width="100%" color="black">

                <!-- THIRD LINE -->
                <div>
                    <h1 class="title1">Cosnultation</h1>
                    <h1 class="title">Section 4</h1>
                </div>

                <div class="box">
                    <p>Cosnultation Advice</p>
                    <textarea name="cosnultation" maxlength="1000" class="input" required cols="30" rows="10" placeholder="Write a Cosnultation..."></textarea>
                </div>

                <div class="updt">
                    <input type="submit" name="add_product" class="inline-btn" value="Add Product">
                </div>
            <?php }; ?>
        </form>
    </section>


    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script src="../js/med_table.js"></script>
    <!--   -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- select search bar  -->


    <?php include '../components/message.php'; ?>
</body>

</html>