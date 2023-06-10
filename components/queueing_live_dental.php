<!-- Queueing -->
<section class="dashboard">
    <h1 class="heading">Dental Consultation Window</h1>
        
    <div class="box-container payat">
        <?php
            $select = mysqli_query($con, "SELECT * FROM queue_list  WHERE type ='Dental' and status = 'active' ORDER BY qnumber ASC");
            if(mysqli_num_rows($select) == 1) {
                while($row = mysqli_fetch_assoc($select)) {
        ?>

        <div class="box">
            <h3>Consulting Now</h3>
            <p><?php echo $row['queue_id']; ?></p>
            <a href="admin_queueing_window_dental_done.php?edit=<?php echo $row['id']; ?>" type="submit" name="add_product" class="btn"><?php echo $row['name']; ?></a>
        </div>

        <?php
                }
            }
            else {
        ?>

        <div class="box">
            <h3>Consulting Now</h3>
            <p><?php echo 'None'; ?></p>
            <a href="admin_queueing_window_dental_next_one.php" class="btn"><?php echo 'Next'; ?></a>
        </div>

        <?php
            }
        ?>
    </div>
</section>

<!-- Waiting On Queue -->
<section class="dashboard">

    <!-- Queue List -->
    <div class="container">
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>Queue Number</th>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <?php
                    $select_users = mysqli_query($con, "SELECT * FROM queue_list  WHERE status = 'Waiting' AND type = 'Dental' ORDER BY queue_id ASC");
                    if (mysqli_num_rows($select_users) > 0) {
                        while ($fetch_user = mysqli_fetch_assoc($select_users)) {
                ?>

                <tr>
                    <td>
                        <?php echo $fetch_user['queue_id']; ?>
                    </td>

                    <td>
                        <?php echo $fetch_user['name']; ?>
                    </td>

                    <td>
                       <?php echo $fetch_user['status']; ?>
                    </td>
                </tr>

                <tr>
                <?php
                        }
                    }
                    else {
                        echo '<td colspan="3" class="empty">No people on queue!</td>';
                    }
                ?>
                </tr>
            </table>
        </div>
    </div>
</section>