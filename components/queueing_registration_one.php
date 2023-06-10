<!-- Heading -->
<section class="dashboard">
    <h1 class="heading">Queueing Registration</h1>
</section>

<!-- Queueing Registration -->
<div class="container">
    <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3 class="title">Get Your Queue Number Here</h3>
            <input type="text" class="box" name="name" placeholder="Enter your name" required>
        
            <select name="type" required class="input box">
                <option value="Medical">Medical Consultation</option>
                <option value="Dental">Dental Consultation</option>
            </select>

            <input type="submit" name="add_product" class="btn" value="Add Queue">
        </form>
    </div>
</div>