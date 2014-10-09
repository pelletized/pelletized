<?php
	$pagetitle = "Contact | Ed Wheeler - Web design & HTML/CSS development";
	$page = "contact";
	$h1 = "Contact Ed Wheeler";
	include "../includes/header.php"; 
?>

<div class="main" role="main">	
	<div class="row-highlighted">
		<div class="row">
			<div class="col col-100">
				<p>If you would like to get in touch with me about possibly working together, just fill out this form and I will get back to you as soon as I can. Alternatively, you can also find my profile on such social networking sites as LinkedIn, Facebook, and Twitter.</p>
			</div>
		</div>
	</div>
	<div class="row">	
		<section class="col col-70 col-center">
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
	</div><!--/.row-->
	
</div>
<?php include "../includes/footer.php"; ?>
</body>
</html>