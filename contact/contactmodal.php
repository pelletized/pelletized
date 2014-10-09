<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>new pxd</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">

</head>
<body>
<section class="contact">

<h2>Contact</h2>
<p class="note">* Required</p>
<?php 				
	include('contact-process.php');
	if (!isset($_GET['from'])) {
	//display email form
	emailForm();
	}

	else {	
	//validation and submit
	validateForm();
	}								
?>





</section>
</body>
</html>