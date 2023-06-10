<h3 class="title">User Account Info</h3>
<div class="label">
    <h4>Userame:</h4>
</div>
<input type="text" class="box" name="update_username" value="<?php echo $user_data['username']; ?>" placeholder="Enter Username" required>

<div class="label">
    <h4>Email:</h4>
</div>
<input type="text" class="box" name="update_email" value="<?php echo $user_data['email']; ?>" placeholder="Enter Email" required>

<div class="label">
    <h4>Phone Number:</h4>
</div>
<input type="type" class="box" name="update_phoneNumber" value="0<?php echo $user_data['phoneNumber']; ?>" placeholder="Enter Phone Number" required>

<div class="label">
    <h4>Confirm Password:</h4>
</div>
<input type="type" class="box" name="cpass" placeholder="Enter Password" required>
<input type="submit" value="Update Profile" name="update_profile" class="btn">