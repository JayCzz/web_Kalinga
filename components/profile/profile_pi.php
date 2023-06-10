<div class="user">
    <?php
        if($user_data['image'] == '') {
            echo '<img src="../uploaded_img/default_admin.jpg" alt="">';
        }
        else {
            echo '<img src="../uploaded_img/'.$user_data['image'].'" alt="">';
        }
    ?>
    <h3><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
    <p><?php echo $user_data['type']; ?></p>
</div>

<div class="box-container slim">
    <div class="infomenu active">
        <a href="admin_profile_pi.php" class="infomenu-box">
            <img src="../img/icon01.png" alt="">
            <h3>Personal Info</h3>
        </a>
    </div>
    <div class="infomenu">
        <a href="admin_profile_ai.php" class="infomenu-box">
            <img src="../img/icon03.png" alt="">
            <h3>Account Info</h3>
        </a>
    </div>
</div>

<div class="details">
    <div class="rowone">
        <h3>Birthday:</h3>
    </div>
    <div class="rowtwo">
        <p><?php echo $user_data['birthday']; ?></p>
    </div>

    <div class="rowone">
        <h3>Age:</h3>
    </div>
    <div class="rowtwo">
        <p><?php echo $user_data['age']; ?></p>
    </div>

    <div class="rowone">
        <h3>Sex:</h3>
    </div>
    <div class="rowtwo">
        <p><?php echo $user_data['sex']; ?></p>
    </div>
</div>