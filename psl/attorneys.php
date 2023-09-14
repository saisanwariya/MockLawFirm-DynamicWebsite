<?php
session_start();
      
    if (isset($_POST['submit'])) {
    $error = "";
    $name = "";
    $position = "";
    $practice = "";
    $office = "";

    if (!empty($_POST['name'])) {
      $name = $_POST['name'];
      $name = "a.name like '%$name%' or ";
    } else {
      $name = "";
    $error .= "You didn't type in your name. <br />";
    }

    if (!empty($_POST['position']) && $_POST['position']>0) {
    $position = $_POST['position'];
    } else {
    $error .= "Select position. <br />";
    }

    if (!empty($_POST['practice']) && $_POST['practice']>0) {
    $practice = $_POST['practice'];
    } else {
    $error .= "Select practice. <br />";
    }

    if (!empty($_POST['office']) && $_POST['office']>0) {
    $office = $_POST['office'];
    } else {
    $error .= "Select office. <br />";
    }

    $sql = "select a.id ,a.name, pr.name practice, po.name position, o.name office from attorneys a left join office o on o.id=a.office left join practice pr on pr.id=a.practice left join position po on po.id=a.position where $name a.office='$office' or a.practice='$practice' or a.position='$position'";

}else{
  $sql = "select a.id ,a.name, pr.name practice, po.name position, o.name office from attorneys a left join office o on o.id=a.office left join practice pr on pr.id=a.practice left join position po on po.id=a.position";
}

  include_once 'database.php';
  ?>
<!DOCTYPE html>
<html dir="ltr" lang="en"><!-- InstanceBegin template="/Templates/galleryPage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Pearson Specter Litt- Lawyer, Business and Law Agency">
<meta name="keywords" content="advocate, attorney, barrister, business, corporate, insurance, investment, investor, justice, law firm, lawyer, lawyers, legal, legal adviser, legal office">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Pearson Specter Litt- Lawyer, Business and Law Agency</title>
<!-- InstanceEndEditable -->
<link rel="icon" type="image/png" href="img/favicon.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/slicknav.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery.bxslider.css">
<link rel="stylesheet" href="css/hover.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

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
--><div class="page-wrapper">
  <section class="main-slider">
    
    <header>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 logo"> <a href="index.php"><img src="img/logo.png" title="Pearson Specter Litt"></a> </div>
        <div class="col-md-9 col-sm-9 nav-wrapper">
          <nav>
            <ul class="sf-menu" id="menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a>
                <ul>
                  <li><a href="about.php">Profile</a></li>
                  <li><a href="gallery.php">Gallery</a></li>
                  <li><a href="topStories.php">Top Stories</a></li>
                  <li><a href="apply-careers.php">Apply for Careers</a> </li>
                  <li><a href="philosophy.php">Philosophy</a></li>
                </ul>
              </li>
              <li><a href="practice-area.php">Practice Areas</a></li>
              <li><a href="#">Attorneys</a>
                <ul>
                  <li><a href="partners.php">Partners</a></li>
                  <li><a href="attorneys.php">Our Attorneys</a></li>
                  <li><a href="probono.php">Probono</a></li>
                </ul>
              </li>
              <li> <a href="appointment.php">Appointment</a> </li>
              <li> <a href="admin/admin.php">Admin</a> </li>
              <li> <a href="contactus.php">Contact</a> </li>
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
          <h2><!-- InstanceBeginEditable name="pageTitle" -->Find <span>Attorneys</span>  <!-- InstanceEndEditable --></h2>
        </div>
      </div>
    </div>
  </section>
  
  	  <!-- InstanceBeginEditable name="contentArea" -->
           <section class="get-appointment section-padding">
    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <div class="contact-form">
            <form method="POST">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="first-name">Name</label>
                    <input type="text" name="name" class="form-control" id="first-name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="last-name">Practice</label>
                    <select id="practice" name="practice" class="form-control">
                      <option selected="selected" value="0">ALL PRACTICES</option>
                      
                      <option value="4">Criminal Law</option>
                      <option value="5">Litigation</option>
                      <option value="36">Takeover &amp; Merger</option>
                      <option value="36">Corporate</option>
                      <option value="141">Bankruptcy</option>
                      <option value="141">Sports &amp; Entertainment</option>
                      <option value="3">Antitrust</option>
                      <option value="34">Real Estate</option>
                      <option value="10">Environmental</option>

                </select>
                  </div>
                </div>
                
                
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="date">Position</label>
                    <select name="position" id="position" class="form-control">
                      <option selected="selected" value="0">ALL POSITIONS</option>
                      <option value="114">Associate</option>
                      <option value="153">Chairman</option>
                      <option value="134">European Counsel</option>
                      <option value="145">Managing Clerk</option>
                      <option value="132">Of Counsel</option>
                      <option value="118">Partner</option>
                      <option value="154">Practice Area Associate</option>
                      <option value="146">Retired Partner</option>
                      <option value="147">Senior Chairman</option>
                      <option value="121">Senior Counsel</option>
                      <option value="131">Special Counsel</option>
                      <option value="152">Special Counsel - Pro Bono</option>
                    </select>
                    
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <label for="subject">Office</label>
                    <select name="office" id="office" class="form-control">
                      <option selected="selected" value="0">ALL OFFICES</option>
                      <option value="6">Melbourne</option>
                      <option value="7">New York</option>
                      <option value="10">Sydney</option>
                      <option value="12">Washington, D.C.</option>
                    </select>
                  </div>
                </div>
                
                
              </div>
              <div class="col-md-12">
                
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="submit" name="submit" value="Find Attorneys" class="btn btn-success">
                  </div>
                </div>
              </div>
            </form>



           <?php

if($result = mysqli_query($link, $sql)){

    if(mysqli_num_rows($result) > 0){
                echo "<table class='table table-bordered table-stripied'>";

            echo "<tr>";

                echo "<th>Sr. No</th>";
                echo "<th>Name</th>";
                echo "<th>Office</th>";
                echo "<th>Practice</th>";
                echo "<th>Position</th>";

            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";

                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['office'] . "</td>";
                echo "<td>" . $row['practice'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";

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
    </div>
  </section>
      <!-- InstanceEndEditable -->

	<!--Footer Section Starts Here -->
  
    <?php include 'footer.php';?>
  
    <!--Footer Section Ends Here -->
  
  
  <a href="#" class="scrollup"> <i class="fa fa-angle-up"></i> </a> </div>
<script src="js/jquery-2.2.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-datepicker.min.js"></script> 
<script src="js/hoverIntent.js"></script> 
<script src="js/superfish.js"></script> 
<script src="js/jquery.slicknav.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/owl.animate.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script src="js/jquery.mixitup.min.js"></script> 
<script src="js/jquery.magnific-popup.min.js"></script> 
<script src="js/waypoints.min.js"></script> 
<script src="js/jquery.counterup.min.js"></script> 
<script src="js/modernizr.min.js"></script> 
<script src="js/custom.js"></script>
</body>
<!-- InstanceEnd --></html>