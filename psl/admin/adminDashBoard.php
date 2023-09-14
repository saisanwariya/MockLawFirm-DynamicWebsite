<?php
include_once '../database.php';

session_start(); //Start the session
define('ADMIN',$_SESSION['name']); //Get the user name from the previously registered super global variable
if(!$_SESSION["admin_login_stats"]){ //If session not registered
header("location:admin"); // Redirect to login.php page
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
  <!-- InstanceBeginEditable name="contentArea" -->
  <section class="contact">
    <div class="container">

	  <div class="col-md-12">
          <div class="heading-normal">
            <h2>Admin DashBoard</h2>
          </div>
        </div>
		
      <div class="row">
      	<div class="col-md-4">
        
        	<ul> 
            	<li> <a href="#">Appointments </a> </li>
            	<li> <a href="#">Pro Bono </a> </li>
            	<li> <a href="#">FeedBack </a> </li>
                <li> <a href="#">Carriers </a> </li>
            </ul>
        
        </div>
        
        <div class="col-md-8">
          <?php
          $sql = "SELECT * FROM appointment_info";

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table>";

            echo "<tr>";

                echo "<th>Sr. No</th>";

                echo "<th>Name</th>";

                echo "<th>Email</th>";

                echo "<th>Age</th>";
                echo "<th>Occupation</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){

            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";

                echo "<td>" . $row['name'] . "</td>";

                echo "<td>" . $row['email'] . "</td>";

                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['occupation'] . "</td>";

            echo "</tr>";

        }

        echo "</table>";

                mysqli_free_result($result);

    } else{

        echo "No records matching your query were found.";

    }
  }
          ?>
        	
        
        </div>
        
      </div>
    </div>
  </section>
  <!-- InstanceEndEditable --> 
  
  <!--Footer Section Starts Here -->
  
  <?php include '../adminFooter.php';?>
  
  <!--Footer Section Ends Here --> 
  
  <a href="#" class="scrollup"> <i class="fa fa-angle-up"></i> </a> </div>
<script src="../js/jquery-2.2.4.min.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/bootstrap-datepicker.min.js"></script> 
<script src="../js/hoverIntent.js"></script> 
<script src="../js/superfish.js"></script> 
<script src="../js/jquery.slicknav.js"></script> 
<script src="../js/owl.carousel.min.js"></script> 
<script src="../js/owl.animate.js"></script> 
<script src="../js/jquery.bxslider.min.js"></script> 
<script src="../js/jquery.mixitup.min.js"></script> 
<script src="../js/jquery.magnific-popup.min.js"></script> 
<script src="../js/waypoints.min.js"></script> 
<script src="../js/jquery.counterup.min.js"></script> 
<script src="../js/modernizr.min.js"></script> 
<script src="../js/custom.js"></script>
</body>
<!-- InstanceEnd -->
</html>