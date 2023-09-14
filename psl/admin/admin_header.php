<?php

include_once '../database.php';
session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!$_SESSION["admin_login_stats"]){ //If session not registered
header("location:index.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- InstanceBegin template="/Templates/admin.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Pearson Specter Litt- Lawyer, Business and Law Agency">
<meta name="keywords" content="advocate, attorney, barrister, business, corporate, insurance, investment, investor, justice, law firm, lawyer, lawyers, legal, legal adviser, legal office">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Pearson Specter Litt- Lawyer, Business and Law Agency - Administrator</title>
<!-- InstanceEndEditable -->
<link rel="icon" type="image/png" href="../img/favicon.png">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="../css/superfish.css">
<link rel="stylesheet" href="../css/slicknav.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/jquery.bxslider.css">
<link rel="stylesheet" href="../css/hover.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<!--<div id="preloader">
  <div id="status"></div>
</div>
-->
<div class="page-wrapper">
  <section class="main-slider">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 logo"> <a href="../index.php"><img src="../img/logo.png" title="Pearson Specter Litt"></a> </div>
          <div class="col-md-9 col-sm-9 nav-wrapper">
            <nav>
              <ul class="sf-menu" id="menu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="../practice-area.php">Practice Areas</a></li>
                <li> <a href="../appointment.php">Appointment</a> </li>
                <li> <a href="../contactus.php">Contact</a> </li>
                <li> <a href="logout.php">Logout</a> </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="slide-single slide-single-page">
      <div class="overlay"></div>
      <div class="text text-page">
        <div class="this-item">
          <h2><!-- InstanceBeginEditable name="pageTitle" -->  <!-- InstanceEndEditable --></h2>
        </div>
      </div>
    </div>
  </section>

