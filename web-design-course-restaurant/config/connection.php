<?php
session_start();
//create a constant variable to home page path.this method we can use to store image link.
define('SITEURL', 'http://localhost/ecom-php/php-ecom/web-design-course-restaurant/');

$sname= "localhost";
$uname= "root";
$password= "";

$db_name = "fooddb";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "connection failed";
}