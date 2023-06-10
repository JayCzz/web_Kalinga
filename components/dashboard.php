<!-- Dashboard -->
<section class="dashboard">
    <h1 class="heading">Dashboard</h1>
        
    <div class="box-container">
        <div class="box">
            <h3>Welcome!</h3>
            <a href="#" class="btn"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></a>
        </div>

        <div class="box">
            <?php
                $sql = "SELECT * FROM `qr_code`";
                $result = mysqli_query($con, $sql);
                if($result){
                    $num = mysqli_num_rows($result);
                }
            ?>
            <h3><?= $num; ?></h3>
            <a href="#" class="btn">Total Families</a>
        </div>

        <div class="box">
            <?php
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($con, $sql);
                if($result){
                    $num = mysqli_num_rows($result);
                }
            ?>
            <h3><?= $num; ?></h3>
            <a href="#" class="btn">Total Users</a>
        </div>

        <div class="box">
            <?php
                $sql = "SELECT * FROM `admin`";
                $result = mysqli_query($con, $sql);
                if($result){
                    $num = mysqli_num_rows($result);
                }
            ?>
            <h3><?= $num; ?></h3>
            <a href="#" class="btn">Total Admins</a>
        </div>

        <div class="box">
            <?php
                $sql = "SELECT * FROM `doctor`";
                $result = mysqli_query($con, $sql);
                if($result){
                    $num = mysqli_num_rows($result);
                }
            ?>
            <h3><?= $num; ?></h3>
            <a href="#" class="btn">Total Doctors</a>
        </div>

        <div class="box">
            <?php
                $sql = "SELECT * FROM `nurse`";
                $result = mysqli_query($con, $sql);
                if($result){
                    $num = mysqli_num_rows($result);
                }
            ?>
            <h3><?= $num; ?></h3>
            <a href="#" class="btn">Total Nurses</a>
        </div>
    </div>
</section>