<?php
/*
require_once('recaptchalib.php');
$publickey = "6Lf34gkAAAAAAPIDDbxUzvEik4mxvsnE1Gejrsqs";
$privatekey = "6Lf34gkAAAAAACsGjkL8aAsboqfG-A41Vcc-lRUj";


# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;
*/

error_reporting(0);

function sendEmail() {
@extract($_POST);

//try to catch spam with a blank input that should remain blank
if ($sb != "") {
	echo "Thank you! You will receive a reply very soon.";
} else {
	//user email
	$emailaddress = stripslashes($email);
	$subject = "Thank you for contacting pelletized.com";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ed@pelletized.com <ed@pelletized.com>\r\n";
	$headers .= "Reply-To: ed@pelletized.com <ed@pelletized.com>\r\n";
	$contents = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">
	Thanks for contacting pelletized.com. You will receive a reply very soon.</font>
	";
	$result = mail($emailaddress,$subject,$contents,$headers);

	// admin email
	$adminemail = "ed@pelletized.com";
	$subject = "Pelletized.com | Contact Form submission";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "From: ". $email . " <" . $email . ">\r\n";
	$headers .= "Reply-To: ". $email . " <" . $email . ">\r\n";
	$contents = "<font face=\"Arial, Helvetica, sans-serif\" size=\"2\">
	Pelletized.com Email Form<br><br>
	Name: " . $name . "<br>
	Phone: " . $phone . "<br>
	Email: " . $email . "<br><br>
	URL: " . $url . "<br><br>
	Comments: " . $comments . "</font>
	";
	$result = mail($adminemail,$subject,$contents,$headers);
	}
}
//validation
function validateForm() {
if ($_POST['name'] == '') {
echo '<span class="error-msg">Please enter your name</span>';
// call function to display form
emailForm();
return false;
 }
 
if ($_POST['phone'] == '') {
echo '<span class="error-msg">Please enter your phone number</span>';
// call function to display form
emailForm();
return false;
 }

$pattern = "/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+/";
if(!preg_match($pattern, $_POST['email']))
{
echo '<span class="error-msg">Please enter a valid email address</span>';
// call function to display form
emailForm();
return false;
 }

if 
(($_POST['name'] != '') && ($_POST['phone'] != '') && ($_POST['email'] != '')) {
  //return true;
  stripslashes(sendEmail());
  echo "Thank you! You will receive a reply very soon.";
 }
}

function emailForm() {
$formfields = '		
<form action="?from=submit" name="contactForm" id="contactForm" class="contact" method="post">
	<label for="sb" style="display:none;">"first name"</label>
	<input type="text" name="sb" id="sb" value="" style="display:none;" />
	
	<div class="row">
		<div class="col col-50">
	<label for="name">*Name:</label>
	<input type="text" name="name" id="name" value="' . $_POST['name'] . '" required autofocus /><br />
		</div>
		<div class="col col-50">
	<label for="phone">*Phone:</label>
	<input type="text" name="phone" id="phone" value="' . $_POST['phone'] . '" required pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="555-555-5555" /><br />
		</div>
	</div>
	<div class="row">
		<div class="col col-50">
	<label for="email">*Email:</label>
	<input type="email" name="email" id="email" value="' . $_POST['email'] . '" required /><br />
		</div>
		<div class="col col-50">
	<label for="url">URL:</label>
	<input type="url" name="url" id="url" value="' . $_POST['url'] . '" /><br />
		</div>
	</div>
	<div class="row">
		<div class="col col-100">
	<label for="comments" class="textarea">Comments:</label>
	<textarea cols="40" rows="5" id="comments" name="comments">'. $_POST['comments'] . '</textarea>
		</div>
	</div>
	<div class="row">
		<div class="col col-50">
			<button name="submit" class="btn btn-submit">Submit</button>
		</div>		
	</div>
</form>';

print $formfields;
}

?>
