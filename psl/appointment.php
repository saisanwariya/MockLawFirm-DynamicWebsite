<?php
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$age ="";	//Subject of age
$occupation =""; //Subject of occupation
$case =""; //Subject of case
$time =""; //Subject of time
$message ="";	//Sender's Message

$nameError ="";			
$emailError ="";
$ageError ="";
$occupationError ="";
$caseError ="";
$timeError ="";
$messageError ="";
$successMessage ="";
$app_msg ="";

include_once 'database.php';

//On submitting form below function will execute

if(isset($_POST['submit']))
  {
  // checking null values in message
    if (empty($_POST["name"])){
        $nameError = "Name is required";
      } 
   else {
       $name = test_input($_POST["name"]);
       // check name only contains letters and whitespace
       if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $nameError = "Only letters and white space allowed"; 
         }
     }
 // checking null values in message  
   if (empty($_POST["email"])) {
       $emailError = "Email is required";
      } 
   else {
      $email = test_input($_POST["email"]);
      }
 // checking null values in message    
   if (empty($_POST["age"])) {
      $ageError = "age is required";
     }
   else { 
	  $age = test_input($_POST["age"]);  
	 } 

 // checking null values in message    
   if (empty($_POST["occupation"])) {
      $occupationError = "occupation is required";
     }
   else { 
	  $occupation = test_input($_POST["occupation"]);
	 }
	 
 // checking null values in message    
   if (empty($_POST["case"])) {
      $caseError = "type Case is required";
     }
   else { 
	  $case = test_input($_POST["case"]);
	 }	  

 // checking null values in message
   if (empty($_POST["time"])) {
      $timeError = "select preferred timings";
     }
   else {
	  $time = test_input($_POST["time"]);
	 }

// checking null values in message
   if (empty($_POST["message"])) {
      $messageError = "Message is required";
     } 
   else { 
	  $message = test_input($_POST["message"]);  
	 } 
  // checking null values in all fields  
if( !($name=='') && !($email=='') && !($age=='') &&!($message=='') )

  {// checking valid email
    if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      
		$header= $name."<". $email .">";
                $headers = "FormGet.com";
     /* Let's prepare the message for the e-mail */
		$msg = "Hello! $name

 Thank you...! For Contacting Us.

 Name: $name
 E-mail: $email
 Age: $age
 Occupation: $occupation
 Type of case: $case
 Preferred Timings: $time
 Message: $message 
  
 This is a Contact Confirmation mail. We Will contact You as soon as possible.";

$msg1 = " $name Contacted Us.

 Here are some information about $name.

 Name: $name
 E-mail: $email
 Age: $age
 Occupation: $occupation
 Type of case: $case
 Preferred Timings: $time
 Message: $message ";

/* Send the message using mail() function */
  /*if(mail($email, $headers, $msg ) && mail("saisanwariya12@gmail.com", $header, $msg1 ))
    {
	$successMessage = "Message sent successfully.......";
    }*/
  }
	else { $emailError = "Invalid Email"; }

 }


$doa = $_POST['doa'];//Date of appointment

$sql = "INSERT INTO appointment_info (name, email, age, occupation, appointment_date, type, preferred_timings, message ) VALUES ('$name','$email','$age','$occupation','$doa','$case','$time','$message')";
if(mysqli_query($link, $sql)){

    $app_msg = "Appointment booked successfully";

} else{

    $app_msg = "Unable to book appointment, Please try again";

}

 //echo '<pre>';print_r($_POST);die;
}
// function for filtering input values
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
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
<style>
span {
	color: red;
}
input[type=text], textarea {
	width: 97.7%;
	height: 34px;
	padding-left: 5px;
	margin-bottom: 5px;
	margin-top: 5px;
	border: 2px solid #ccc;
	color: #4f4f4f;
	font-size: 16px;
	border-radius: 5px;
}
textarea {
	resize: none;
	height: 80px;
}
label {
	color: #464646;
	text-shadow: 0 1px 0 #fff;
	font-size: 14px;
	font-weight: bold;
}
.submit {
	padding: 10px;
	text-align: center;
	font-size: 18px;
	background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
	border: 2px solid #e5a900;
	color: #ffffff;
	font-weight: bold;
	cursor: pointer;
	text-shadow: 0px 1px 0px #13506D;
	width: 100%;
	border-radius: 5px;
}
.submit:hover {
	background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
}
/* -------------------------------------
    CSS for sidebar (optional) 
---------------------------------------- */
.formget {
	float: right;
}
</style>
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
          <h2><!-- InstanceBeginEditable name="pageTitle" -->Get An <span>Appointment</span> <!-- InstanceEndEditable --></h2>
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
            <h1>Get An Appointment</h1>
            <p>To make an appointment with us, please feel up the form below.</p>
            <span class="success"><?php echo $successMessage;?></span>
          </div>
        </div>
        <div class="col-md-8">
          <div class="form-group">
            <span><?php echo $app_msg; ?></span>
            <form method="post" action="appointment.php">
            
              <label>Name</label> <span class="error"><?php echo $nameError;?></span>
              <input class="form-control" type="text" name="name" value="" required>
              
              <label>Email</label> <span class="error"><?php echo $emailError;?></span>
              <input class="form-control" type="text" name="email" value="" required>
              
              <label>Age</label> <span class="error"><?php echo $ageError;?></span>
              <input class="form-control" type="number" name="age" value="" required style="width:100px">
              
              <label>Occupation</label> <span class="error"><?php echo $occupationError;?></span>
              <input class="form-control" type="text" name="occupation" value="" required>
              
              <label>Date of Appointment</label>
              <input type="date" name="doa" class="form-control"  style="width:300px;" required>
                       
              <label>Type of case</label> <span class="error"><?php echo $caseError;?></span>
              <select class="form-control" type="text" name="case" value="" style="width:300px" required>
              
              		  <option value="Criminal Law" selected>Criminal Law</option>
                      <option value="Litigation">Litigation</option>
                      <option value="Takeover & Merger">Takeover & Merger</option>
                      <option value="Corporate">Corporate</option>
                      <option value="Bankruptcy">Bankruptcy</option>
                      <option value="Sports & Entertainment">Sports & Entertainment</option>
                      <option value="Antitrust">Antitrust</option>
                      <option value="Real Estate">Real Estate</option>
                      <option value="Environmental">Environmental</option>
                      
			  </select>

              <label>Preferred Timings</label> <span class="error"><?php echo $timeError;?></span>
              <select class="form-control" type="text" name="time" value="" style="width:300px" required>
                <option value="09:00am to 12:00pm" selected>09:00am to 12:00pm</option>
                <option value="01:00pm to 03:00pm">01:00pm to 03:00pm</option>
                <option value="04:00pm to 08:00pm">04:00pm to 08:00pm</option>
			  </select>

              <label>Message</label> <span class="error"><?php echo $messageError;?></span>
              <textarea name="message" val="" class="form-control" required></textarea>
              <br>
              <input class="btn btn-success" type="submit" name="submit" value="Submit" style="width:130px;">
              <br>
              
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="icon"> <i class="fa fa-map"></i> </div>
            <div class="text">
              <h3>Address</h3>
              <p> 370 Lexington Ave #505, New York, NY 10017, USA </p>
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