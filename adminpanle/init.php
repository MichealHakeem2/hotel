<?php
ob_start();
session_start();

if(!isset($_SESSION['id'])){
    header("location: /hotel/adminpanle/pages-login.php");
    exit();
  }
  

// include path css
$include_header_css = '/hotel/adminpanle/assets/';
$include_footer_js = '/hotel/adminpanle/assets/';
require __DIR__ . './includes/functions/functions.php';
require __DIR__ . './env.php';


// include file 
require __DIR__ . './includes/head.php';
require __DIR__ . './includes/headers.php';
require __DIR__ . './includes/aside.php';

// require __DIR__ . '../init.php';

// $host = "localhost";
// $user = "root";
// $password = '';
// $name = "hotel";
// $conn = mysqli_connect($host, $user, $password, $name);
