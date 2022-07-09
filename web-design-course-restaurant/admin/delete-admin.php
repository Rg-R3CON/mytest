<?php include('../config/connection.php'); ?>

<?php $id = $_GET['id'];
$sql = "DELETE FROM tbl_admin WHERE id=$id";

$res = mysqli_query($conn, $sql);
    //echo $id;

    if($res == TRUE){
      //  echo "admin deleted";
        $_SESSION['delete'] = "admin deleted success";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
          // echo "admin not deleted";
              $_SESSION['delete'] = "failed to delete admin";
              header('location:'.SITEURL.'admin/manage-admin.php');


    }
    
    
    ?>