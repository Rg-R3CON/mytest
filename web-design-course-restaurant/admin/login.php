<?php include("../config/connection.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>LOGIN</title>
  <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="login">
    <h2 class="text-center">LOGIN FORM</h2>
<form action="" method="POST">
<?php
  if (isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
        }
 if (isset($_SESSION['no-login'])){
                echo $_SESSION['no-login'];
                unset($_SESSION['no-login']);
        }

?>  <br>
  User Name: 
  <input type="text" name="username" placeholder="username"> <br>

    Password:  
  <input type="password" name="password" placeholder="password"> <br>
<input type="submit" name="submit" value="Login" class="btn-primary">
</form>    


</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




<?php
if(isset($_POST['submit'])){

  $username=$_POST['username'];
  $password=$_POST['password'];

$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' " ;
$res = mysqli_query($conn, $sql);
$count = mysqli_num_rows($res);
if ($count == 1)
{
   $_SESSION['login'] = "login success";
   $_SESSION['user'] = $username; //this session unsets only on logout page,session destroy cmd

    header('location:'.SITEURL.'admin/'); 
}else{
$_SESSION['login'] = "login failed";
    header('location:'.SITEURL.'admin/login.php'); 
}


}






?>







