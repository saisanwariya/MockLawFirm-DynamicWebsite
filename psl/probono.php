<?php 
$app_msg='';
if(isset($_POST) && count($_POST) > 0) {
  include_once 'database.php';
  $name = $_POST['name'];
  $age = $_POST['age'];
  $case_info = $_POST['case'];
  $situation = $_POST['fs'];
  $income = $_POST['ai'];
  $sql = "INSERT INTO pro_bono_info (name, age, case_info, situation, income ) VALUES ('$name','$age','$case_info','$situation','$income')";
if(mysqli_query($link, $sql)){

    $app_msg = "Request send successfully";

} else{

    $app_msg = "Unable to book appointment, Please try again";

}

}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en"><!-- InstanceBegin template="/Templates/internalPage.dwt" codeOutsideHTMLIsLocked="false" -->
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
          <h2><!-- InstanceBeginEditable name="pageTitle" -->Pro Bono <!-- InstanceEndEditable --></h2>
        </div>
      </div>
    </div>
  </section>
  <section class="about-area section-padding" style="padding-bottom:0px;">
    <div class="container">
      
      <div class="row">
      
      <!-- InstanceBeginEditable name="contentArea" -->
           <div style="min-height:250px;">
           <div class="col-md-12">
            
            <h4 style="color: #f00;"> <?php echo $app_msg; ?></h4>

           	<h3>Commitment to Pro Bono Work</h3>
           	
            <p>Pearson Spector Litt is committed to supporting attorneys who undertake pro bono projects in all areas of the law.  Pro bono clients are clients of the firm, and no distinction is made between hours spent on pro bono or other client matters.</p>

<p>The firm provides partner supervision, training, and mentoring on all pro bono matters.  Associates are encouraged to attend pro bono training classes and seminars held by our partnering organizations.  In addition, summer associates routinely participate in Pearson Spector Litt  's pro bono practice and may be assigned to any pro bono matter.</p>
			</div>
            

            <div class="col-md-6">
          <div class="form-group">
        
        <form action="probono.php" method="post">
          <label>Name:</label>
          <input type="text" name="name" value="" class="form-control" required />
          
           <label>Age:</label>
          <input type="text" name="age" value="" class="form-control" required />
          
          <label>Case:</label>
          <select id="case" name="case" class="form-control" required>
                      <option selected="selected" value="0"></option>
                      <option value="2">Criminal Law</option>
                      <option value="3">Litigation</option>
                      <option value="4">Takeover & Merger</option>
                      <option value="2">Corporate</option>
                      <option value="3">Bankruptcy</option>
                      <option value="4">Sports & Entertainment</option>
                      <option value="2">Antitrust</option>
                      <option value="2">Real Estate</option>
                      <option value="2">Environmental</option>
                      
                      
           </select>           
          <label>Financial Situation:</label>
          <br />
          <textarea name="fs" rows="4" cols="5" class="form-control" required> </textarea>
          
          <label>Annual Income:</label>
          <select id="ai" name="ai" class="form-control" required>
                      <option selected="selected" value="0"></option>
                      <option value="2">10,000 to 25,000</option>
                      <option value="3">25,000 to 50,000</option>
                      <option value="4">50,000 to 75,000</option>
                      <option value="5">75,000 to 1,00,000</option>
           </select>
                   
          <br />
          <input type="submit" class="btn btn-success" name="submit" value="Submit" style="width:130px;"  />
        </form>
      </div>
        </div>
            
            
            
           </div>
      <!-- InstanceEndEditable -->
        
      </div>
    </div>
  </section>

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