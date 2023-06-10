<h3 class="title">User Account Info</h3>
<div class="label">
    <h4>First Name:</h4>
</div>
<input type="text" class="box" name="update_firstName" value="<?php echo $user_data['firstName']; ?>" placeholder="Enter First Name" required>

<div class="label">
    <h4>Last Name:</h4>
</div>
<input type="text" class="box" name="update_lastName" value="<?php echo $user_data['lastName']; ?>" placeholder="Enter Last Name" required>

<div class="label">
    <h4>Birthday:</h4>
</div>
<input type="date" class="box" name="update_birthday" value="<?php echo $user_data['birthday']; ?>" placeholder="Enter Birthday" required>

<div class="label">
    <h4>Age:</h4>
</div>
<input type="number" min="0" class="box" name="update_age" value="<?php echo $user_data['age']; ?>" placeholder="Enter Age" required>

<div class="label">
    <h4>Sex:</h4>
</div>
<input type="text" class="box" name="update_sex" value="<?php echo $user_data['sex']; ?>" placeholder="Enter Sex" required>

<div class="label">
    <h4>Profile Picture:</h4>
</div>
<input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">

<div class="label">
    <h4>Enter Password:</h4>
</div>
<input type="text" class="box" name="cpass" placeholder="Enter Password" required>
<input type="submit" value="Update Profile" name="update_profile" class="btn">