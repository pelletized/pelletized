<?php
	$pagetitle = "Photos | Ed Wheeler - Web design & HTML/CSS development";
	$page = "Photos";
	$h1 = "Photos by Ed Wheeler on display";
	include "../includes/header.php";
?>

<div class="main" role="main">
	<div class="row-highlighted">
		<div class="row">
			<div class="col col-100">
				<p>An occasional photographer, below are the shows and galleries I've been involved with. Contact me if you are interested in purchasing a print!</p>
			</div>
		</div>
	</div>

	<div class="row">
		<section class="col col-50">
			<div class="tile">
                <a href="/contact/">
                    <img src="images/somerville.2016.jpg" alt="Russ & Daughters by Ed Wheeler" />
                    <div class="tile-desc">
                        <div class="tile-content">
                            <h3 class="tile-title">Somerville Toy Camera Festival</h3>
                            <p class="tile-blurb">
								2016<br>
								<em>Russ & Daughters</em><br>
								Camera: Plastic Filmtastic Debonair
							</p>
                        </div><!--/.tile-content-->
                        <div class="tile-link tile-content">
                            Buy it now! 🡪
                        </div>
                    </div><!--/.tile-desc-->
                </a>
            </div><!--/.tile-->
		</section>

		<section class="col col-50">
			<div class="tile">
                <a href="/contact/">
                    <img src="images/rayko.2015.jpg" alt="Flatiron Building" />
                    <div class="tile-desc">
                        <div class="tile-content">
                            <h3 class="tile-title">RayKo's 8th Annual International Juried Plastic Camera Show</h3>
                            <p class="tile-blurb">
								2015<br>
								<em>Flatiron Building</em><br>
								Camera: Plastic Filmtastic Debonair
							</p>
                        </div><!--/.tile-content-->
                        <div class="tile-link tile-content">
                            Buy it now! 🡪
                        </div>
                    </div><!--/.tile-desc-->
                </a>
            </div><!--/.tile-->
		</section>

	</div><!--/.row-->
</div>
<?php include "../includes/footer.php"; ?>
</body>
</html>
