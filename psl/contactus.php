<?php	  
	  	session_start();
      
		if (isset($_POST['submit'])) {
		$error = "";
		$name = "";
		$email = "";
		$message = "";

		if (!empty($_POST['name'])) {
		$name = $_POST['name'];
		} else {
		$error .= "You didn't type in your name. <br />";
		}

		if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		  if (!preg_match("/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){ 
		  $error .= "The e-mail address you entered is not valid. <br/>";
		  }
		} else {
		$error .= "You didn't type in an e-mail address. <br />";
		}

		if (!empty($_POST['message'])) {
		$message = $_POST['message'];
		} else {
		$error .= "You didn't type in a message. <br />";
		}

		/*if(($_POST['code']) == $_SESSION['code']) { 
		$code = $_POST['code'];
		} else { 
		$error .= "The captcha code you entered does not match. Please try again. <br />";   
		}*/

		// if (empty($error)) {
		// $from = 'From: ' . $name . ' <' . $email . '>';
		// $to = "saisanwariya12@gmail.com";
		// $subject = "New contact form message";
		// $content = $name . " has sent you a message: \n \n " . $message;
		// $success = "<h3>Thank you! Your message has been sent!</h3>";
		// mail($to,$subject,$content,$from);
		// }

    

  include_once 'database.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['message'];

  $sql = "INSERT INTO contact_us (name, email, msg ) VALUES ('$name','$email','msg')";

    if(mysqli_query($link, $sql)){

        $app_msg = "Your successfully submitted";

    } else{

        $app_msg = "Sorry, Something went wrong . Please try again";

    }

		}
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
          <h2><!-- InstanceBeginEditable name="pageTitle" --><!-- InstanceEndEditable --></h2>
        </div>
      </div>
    </div>
  </section>
  
  	  <!-- InstanceBeginEditable name="contentArea" -->
    <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heading-normal">
            <h2>Feedback</h2>
            <p>Fill up the form below to contact us and send us an email</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
        <?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent. The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>
        <form action="contactus.php" method="post">
          <label>Name:</label>
          <input type="text" name="name" value="" class="form-control" required /> 
          
          <label>Email:</label>
          <input type="text" name="email" value="" class="form-control" required />
          
          <label>Message:</label>
          <br />
          <textarea name="message" rows="10" cols="20" class="form-control" required> </textarea>
          
<!--          <label><img src="captcha.php"></label>
          <input type="text" name="code">
-->          
          <br />
          <input type="submit" class="btn btn-success" name="submit" value="Send message" style="width:130px;"  />
        </form>
      </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="icon"> <i class="fa fa-map"></i> </div>
            <div class="text">
              <h3>Address</h3>
              <p>370 Lexington Ave #505, New York, NY 10017, USA</p>
            </div>
          </div>
          <div class="item">
            <div class="icon"> <i class="fa fa-phone"></i> </div>
            <div class="text">
              <h3>Phone</h3>
              <ul>
                <li>+1 99896-99999</li>
                <li>+1 90569-99999</li>
              </ul>
            </div>
          </div>
          <div class="item">
            <div class="icon"> <i class="fa fa-envelope"></i> </div>
            <div class="text">
              <h3>Email</h3>
              <p> <a class="__cf_email__" href="http://themes.a3devs.com/cdn-cgi/l/email-protection" data-cfemail="7e171018113e07110b0c1a11131f1710501d1113">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script> 
              </p>
            </div>
          </div>
          <div class="item">
          	<div class="icon">
            <div class="smo"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-whatsapp"></i></a> <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-snapchat"></i></a></div>
          </div>
          </div>
        </div>
      </div>
      <div class="gap-small"></div>
      <div class="gap-small"></div>
      <div class="row">
        <div class="col-md-12">
          <div class="heading-normal">
            <h2>Find Us on Map</h2>
          </div>
          <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040262736!2d-74.25819605476612!3d40.70583158628177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1485712851643" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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