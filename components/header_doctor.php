<style>
    .user {
        text-align: center;

    }

    .user img {
        height: 9.5rem;
        width: 9.5rem;
        padding: .1rem;
        background-color: #fff;
        border-radius: 50%;
        /* Make the image round */
        object-fit: cover;
        margin-bottom: 1rem;
        border: none;
        /* Remove the border */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        /* Add a background shadow */
    }
</style>

<!-- header section starts -->
<header class="header">
    <section class="flex">
        <a href="doctor_index.html" class="logo">
            Doctor
        </a>

        <form action="" method="post" enctype="multipart/form-data" class="search-form">
            <input type="text" name="search" required placeholder="search..." maxlength="100">
            <button type="submit" class="fas fa-search" name="submit"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
        </div>

        <div class="profile">
            <div class="user">
                <?php
                if ($user_data['image'] == '') {
                    echo '<img src="../uploaded_img/default_admin.jpg" alt="">';
                } else {
                    echo '<img src="../uploaded_img/' . $user_data['image'] . '" alt="">';
                }
                ?>
            </div>
            <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
            <p class="role">Doctor</p>
            <a href="doctor_profile_pi.php" class="btn">view profile</a>
        </div>
    </section>
</header>

<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">
    <div id="close-btn">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
        <div class="user">
            <?php
            if ($user_data['image'] == '') {
                echo '<img src="../uploaded_img/default_admin.jpg" alt="">';
            } else {
                echo '<img src="../uploaded_img/' . $user_data['image'] . '" alt="">';
            }
            ?>
        </div>
        <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
        <p class="role">Doctor</p>
        <a href="doctor_profile_pi.php" class="btn">view profile</a>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar">
        <ul>
            <li>
                <a href="doctor_index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li>
                <a href="doctor_dashboard.php">
                    <i class="fa fa-line-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="doctor_consultation_users_search.php">
                    <i class="fa fa-clipboard"></i>
                    <span>Consultation</span>
                </a>
            </li>

            <li>
                <a href="doctor_prescription_users_search.php">
                    <i class="fas fa-file-text"></i>
                    <span>Prescription</span>
                </a>
            </li>

            <li>
                <a href="../modules_doctor/doctor_users_page.php">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                </a>
            </li>

            <li>
                <a href="doctor_inventory.php">
                    <i class="fa fa-briefcase"></i>
                    <span>Inventory</span>
                </a>
            </li>

            <li class="logout">
                <a href="../private_users.php">
                    <i class="fa fa-sign-out"></i>
                    <span>Sign Out</span>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- side bar section ends -->