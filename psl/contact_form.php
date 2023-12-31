<?php
// Initialize variables to null.
$name ="";		//Sender Name
$email =""; 	//Sender's email ID
$purpose ="";	//Subject of mail
$message ="";	//Sender's Message 

$nameError ="";			
$emailError ="";
$purposeError ="";
$messageError ="";
$successMessage ="";

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
   if (empty($_POST["purpose"])) {
      $purposeError = "Purpose is required";
     }
   else { 
	  $purpose = test_input($_POST["purpose"]);  
	 } 
// checking null values in message
   if (empty($_POST["message"])) {
      $messageError = "Message is required";
     } 
   else { 
	  $message = test_input($_POST["message"]);  
	 } 
  // checking null values in all fields  
if( !($name=='') && !($email=='') && !($purpose=='') &&!($message=='') )

  {// checking valid email
    if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
      
		$header= $name."<". $email .">";
                $headers = "FormGet.com";
     /* Let's prepare the message for the e-mail */
		$msg = "Hello! $name

 Thank you...! For Contacting Us.

 Name: $name
 E-mail: $email
 Purpose: $purpose
 Message: $message 
  
 This is a Contact Confirmation mail.
 We Will contact You as soon as possible.";

$msg1 = " $name Contacted Us.

 Here are some information about $name.

 Name: $name
 E-mail: $email
 Purpose: $purpose
 Message: $message ";

/* Send the message using mail() function */
  if(mail($email, $headers, $msg ) && mail("parmesh@vupadhi.com", $header, $msg1 ))
    {
	$successMessage = "Message sent successfully.......";
    }
  }
else { $emailError = "Invalid Email"; }

 }
}
// function for filtering input values
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
<!DOCTYPE HTML> 
<html>
  <head>
  <title>PHP Contact Form with Validation</title>
  <link rel="stylesheet" href="css/style.css" />
  </head>
<body>
<div class="container">
  <div class="main">
   <h2>PHP Contact Form with Validation</h2><hr/><br>	
	<form method="post" action="contact_form.php"> 
	<label>Name :</label><br>
	<input class="input" type="text" name="name" value="">
	<span class="error"><?php echo $nameError;?></span><br><br>					
		 
	<label>Email :</label><br>
	<input class="input" type="text" name="email" value="">
	<span class="error"><?php echo $emailError;?></span><br><br>	
						   
	<label>Purpose :</label><br>
	<input class="input" type="text" name="purpose" value="">
	<span class="error"><?php echo $purposeError;?></span><br><br>	
				
	<label>Message :</label><br>
	<textarea name="message" val=""></textarea>
	<span class="error"><?php echo $messageError;?></span><br><br>	
				
	<input class="submit" type="submit" name="submit" value="Submit">
    <span class="success"><?php echo $successMessage;?></span>
    </form>
  </div>
</div>  
</body>
</html>
<!--html ends here-->
