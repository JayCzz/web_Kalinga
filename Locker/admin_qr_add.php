<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    if(isset($_POST['add_product'])){

        $product_name = $_POST['product_name'];
        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
        $product_image_folder = 'uploaded_qr/'.$product_image;
    
        if(empty($product_name) || empty($product_image)){
        $message[] = 'please fill out all';
        }else{
        $insert = "INSERT INTO qr_code(name, image) VALUES('$product_name', '$product_image')";
        $upload = mysqli_query($con,$insert);
        if($upload){
            move_uploaded_file($product_image_tmp_name, $product_image_folder);
            header('location:admin_qr_page.php');
        }else{
            $message[] = 'could not add the product';
        }
        }
    
    };

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inventory</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/qr.css">
    </head>

    <body>
        <header class="header">
            <section class="flex">
                <a href="home.html" class="logo">Admin</a>
      
                <form action="search.html" method="post" class="search-form">
                    <input type="text" name="search_box" required placeholder="search..." maxlength="100">
                    <button type="submit" class="fas fa-search"></button>
                </form>
      
                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="search-btn" class="fas fa-search"></div>
                    <div id="user-btn" class="fas fa-user"></div>
                    <div id="toggle-btn" class="fas fa-sun"></div>
                </div>
      
                <div class="profile">
                    <img src="img/pic-1.jpg" class="image" alt="">
                    <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                    <p class="role">Admin</p>
                    <a href="profile.html" class="btn">view profile</a>
                </div>
            </section>
        </header>

        <div class="side-bar">
            <div id="close-btn">
                <i class="fas fa-times"></i>
            </div>
   
            <div class="profile">
                <img src="img/pic-1.jpg" class="image" alt="">
                <h3 class="name"><?php echo $user_data['firstName']; ?> <?php echo $user_data['lastName']; ?></h3>
                <p class="role">Admin</p>
                <a href="profile.html" class="btn">view profile</a>
            </div>
            
            <!-- Navigation Bar -->
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="admin_index.php">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
         
                    <li>
                        <a href="#">
                            <i class="fa fa-line-chart"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
         
                    <li>
                        <a href="#">
                            <i class="fas fa-question"></i>
                            <span>About</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-briefcase"></i>
                            <span>Inventory</span>
                        </a>
                    </li>
        
                    <li>
                        <a href="#">
                            <i class="fa fa-user-md"></i>
                            <span>Staff</span>
                        </a>
                    </li>
         
                    <li>
                        <a href="#">
                            <i class="fa fa-phone"></i>
                            <span>Contact Us</span>
                        </a>
                    </li>
         
                    <li class="logout">
                        <a href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <?php

        if(isset($message)){
            foreach($message as $message){
                echo '<span class="message">'.$message.'</span>';
            }
        }

        ?>

        <!-- QR Code Update -->
        <section class="dashboard">
            <h1 class="heading">Add QR Code</h1>
        </section>
        
        <div class="container">
            <div class="admin-product-form-container">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>add a new qr</h3>
                    <input type="text" placeholder="Enter ID Number" name="product_name" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn" name="add_product" value="Add QR">
                    <a href="admin_qr_page.php" class="btn">go back!</a>
                </form>
            </div>
        </div>

        <!-- custom js file link  -->
        <script src="js/script.js"></script>
    </body>
</html>