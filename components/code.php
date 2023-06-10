<?php 
    session_start();

    include '../components/connection.php';
    include '../components/functions.php';

    if(isset($_POST['delete_multiple'])) {
        $all_id = $_POST['delete_id'];
        $extract_id = implode(',' , $all_id);
        // echo $extract_id;

	    $query = "DELETE FROM queue_id_value WHERE id IN($extract_id) ";
	    $query_run = mysqli_query($con, $query);

        if($query_run) {
            $_SESSION['status'] = "Data Deleted Successfully";
            header("location:../modules_admin/admin_queueing.php");
        }
        else {
            $_SESSION['status'] = "Data Deleted Unsuccessfully";
            header("location:../modules_admin/admin_queueing.php");
        }
    };
?>