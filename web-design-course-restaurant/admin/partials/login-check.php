<?php
  
  if(!isset($_SESSION['user'])){
      $_SESSION['no-login']="please login to adminpannel";
      header('location:'.SITEURL.'admin/login.php');
  }


?>