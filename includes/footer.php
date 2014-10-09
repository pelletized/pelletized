<footer class="global-footer">
	<div class="row">		
		<div class="col col-70">
			<ul class="social">	
				<li class="social-github"><a href="http://www.github.com/pelletized" target="_blank" title="Github">github</a></li>
				<li class="social-insta"><a href="http://instagram.com/pelletized" target="_blank" title="Instagram">instagram</a></li>
				<li class="social-lastfm"><a href="http://www.last.fm/user/pelletized" target="_blank" title="Last.fm">lastfm</a></li>
				
				<li class="social-twitter"><a href="https://twitter.com/frightening" target="_blank" title="Twitter">twitter</a></li>					
				<li class="social-fb"><a href="https://www.facebook.com/pelletized" target="_blank" title="Facebook">facebook</a></li>								
				
				<li class="social-linkedin"><a href="http://www.linkedin.com/in/edwheeler/" target="_blank" title="Linkedin">linkedin</a></li>				
				<li class="social-googleplus"><a href="https://plus.google.com/107821126527169760339/" target="_blank" title="Google+">google+</a></li>
			</ul>
		</div>
		<div class="col col-30 col-right">
		&copy; 2005 - 2014 Ed Wheeler 	
		</div>
		
	</div>

</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/main.js"></script>
<?php 
if ($page == "home") {
	include('includes/stats.php'); 
} else {
	include('../includes/stats.php'); 
}	
?>