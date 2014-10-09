//main
$(document).ready(function() {
	
	//h1 animate	
	setTimeout(function() {
		$('h1').css('display','inline-block').addClass('animated bounceInDown');
	}, 1500);	
	
	//hamburger menu for small screens
	$("#hamburger").on('click', function() {		
		$("body").toggleClass('nav-expanded');	
	});	
	
	//when nav item is clicked, remove .nav-expanded
	$(".nav-main .menu a").on('click', function() {
		$("body").removeClass("nav-expanded");	
	});
	
	//remove .nav-expanded on browser resize
	$(window).resize(function() {
		$("body").removeClass("nav-expanded");
	});	
	

});




