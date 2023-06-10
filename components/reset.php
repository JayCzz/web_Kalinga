<?php

session_start();

mysqli_query($con, "alter table queue_id_value auto_increment = 1");
header('location:admin_queueing.php');
die;