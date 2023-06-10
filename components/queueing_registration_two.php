<!-- PHP -->
<?php 
    $queue = $_GET['edit'];
?>

<!-- Heading -->
<section class="dashboard">
    <h1 class="heading">Queueing Registration</h1>
</section>

<!-- Queueing Registration Display -->
<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3 class="title">Get Your Queue Number Here</h3>
            <input type="text" class="box" name="name" placeholder="Enter your name">

            <input type="submit" name="add_product" class="btn" value="Add Queue">
        </form>
    </div>
</div>

<!-- Queue Number -->
<?php
    $select = mysqli_query($con, "SELECT * FROM queue_list  WHERE qnumber = '$queue' ORDER BY qnumber DESC");
    while ($row = mysqli_fetch_assoc($select)) {
?>

<section class="dashboard">
    <div class="popup">
        <img src="../img/404-tick.png">
        <h2><?php echo $row['queue_id']; ?></h2>
        <p><?php echo $row['name']; ?></p>
        <button type="button">Thank You!</button>
    </div>
</section>

<?php } ?>