<?php
session_start();

include '../components/connection.php';
include '../components/functions.php';

$user_data = check_login($con);

$id = $_GET['edit'];

if (isset($_POST['add_product'])) {

    $prescription_name = $_POST['prescription_name'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $familyNumber = $_POST['familyNumber'];
    $cnumber = $_POST['cnumber'];
    $prescription = $_POST['prescription'];

    if (empty($prescription_name) || empty($address)) {
        $warning_msg[] = 'please fill out all';
    } else {
        $insert = "INSERT INTO prescriptions(name, address, date, familyNumber, cnumber, prescription) VALUES('$prescription_name', '$address', '$date', '$familyNumber', '$cnumber', '$prescription')";
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

 
    <!-- -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

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
            while ($row = mysqli_fetch_assoc($select)) {
            ?>
                <h3>Prescription Form</h3>
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
                    <h1 class="title1">Prescribed Medication</h1>
                    <h1 class="title">Section 3</h1>
                </div>
                <!-- -->
                <div class="wrapper">
                    <br>
                    <br>
                    <!-- -->
                    <div class="row" name="add_medicine[0]" id="add_medicine" placeholder="Another Field">

                        <label class="label mb-3" name="table" id="table">Table1</label>

                        <!-- -->
                        <div class="col-md-3 mb-3">
                            <label class="label1" for="medicine">Select Medicine</label>
                            <!-- -->
                            <div class="mediv">
                                <select class="select2" id="medicine" name="medicine" required>
                                    <option value="">Select Medicine</option>
                                    <option value="US">Biogesic 60mg</option>
                                    <option value="KE">Alaxan</option>
                                    <option value="UK">Diatabs</option>
                                    <option value="IN">Neozep</option>
                                    <option value="CN">Bioflu</option>
                                    <option value="CA">Alerta</option>
                                    <option value="ZA">Flanax</option>
                                </select>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-3 mb-3">
                            <label class="label1">Quantity</label>
                            <div class="">
                                <input class="med_quantity" type="number" name="med_quantity" placeholder="Enter Quantity" min="0" max="100" />
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label class="label1">Instruction</label>
                                <input class="med_instruction" type="text" name="med_instruction" placeholder="Enter Instruction" required>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-2 mt-3 ">
                            <button class="btn1 btn-success add_row_btn">Add More</button>
                        </div>
                    </div>
                </div>

                <!-- 3rd LINE end-->
                <br>
                <br>
                <hr size="3" width="100%" color="black">

                <!-- 4th LINE -->
                <div>
                    <h1 class="title1"></h1>
                    <h1 class="title">Section 4</h1>
                </div>

            <?php }; ?>
            <div class="box">
                <p>Prescription Advice (optional) <span>*</span></p>
                <textarea name="prescription" maxlength="1000" class="input" required cols="30" rows="10" placeholder="Write about the prescription..."></textarea>
            </div>

            <div class="updt">
                <input type="submit" name="add_product" class="inline-btn" value="Add Product">
            </div>
            <!-- 4th LINE end-->


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