<?php
//keep ip addresses off my site
$ip = $_SERVER['REMOTE_ADDR'];
//print $ip;
if ($ip == '90.196.84.255' || $ip == '71.13.75.131' || $ip == '70.176.128.138' || $ip == '80.0.6.49' || $ip == '37.229.224.119' || $ip == '190.229.241.111') {
	header("Location: busted.php");
}
?>

<?php include "head.php"; ?>
<body id="<?=$page?>">
<header class="global-header">
	<nav class="nav-main">
		<div class="row">
			<div class="col col-10">
				<a href="/" class="logo"><img src="/images/pxd-logo-icon.png" width="36" height="40" alt="pelletized"></a>
			</div><!--/.col-->
			<div class="col col-80 menu">
				<ul>
				<?php
					if ($page == "home") {?>
						<li><a href="/" class="active">Home</a></li>
					<?php } else { ?>
						<li><a href="/">Home</a></li>
					<?php }
					if ($page == "portfolio") {?>
						<li><a href="/portfolio/" class="active">Portfolio</a></li>
					<?php } else { ?>
						<li><a href="/portfolio/">Portfolio</a></li>
					<?php }
					if ($page == "resume") {?>
						<li><a href="/resume/" class="active">Resume</a></li>
					<?php } else { ?>
						<li><a href="/resume/">Resume</a></li>
					<?php }
					if ($page == "photos") {?>
						<li><a href="/photos/">Photos</a></li>
					<?php } else { ?>
						<li><a href="/photos/">Photos</a></li>
					<?php }
					if ($page == "contact") {?>
						<li><a href="/contact/" class="active">Contact</a></li>
					<?php } else { ?>
						<li><a href="/contact/">Contact</a></li>
					<?php }	?>
						<!--<li><a href="http://blog.pelletized.com">Blog</a></li>-->
				</ul>
				<p id="pageid"><?=$page?>
			</div><!--/.col-->
			<div class="col col-10">
				<div id="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div><!--/.col-->
		</div><!--/.row-->
	</nav><!--/.nav-main-->

	<div class="row">
		<h1><?=$h1;?></h1>
	</div>
</header><!--/.global-header-->
