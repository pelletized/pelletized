function InstaPic() {	
	this.get = function() {
		var url = "/js/ig/ig.json";
		var $width = $(window).width();
		$.getJSON(url, function(data) {			
			//console.log(data);
			this.rand = Math.floor(Math.random() * data.data.length);
			
			if ($width < 480) {
				this.photo = data.data[this.rand].images.low_resolution.url;
			} else {
				this.photo = data.data[this.rand].images.standard_resolution.url;
			}	
			
			this.link = data.data[this.rand].link;
			
			instaPic.build(this.rand, this.photo, this.link);
		});	
	};
}

InstaPic.prototype.build = function(rand, photo, link) {										
	/*
	$('global-header .nav-main').css({
		'opacity':'1',
		'border':'10px solid red'
	});	
	$('.global-header').css({				
		'opacity':'0',		
		'background-image':'url(' + photo + ')'
	}).animate({			
		'opacity':'1'
	}, 1000);
	*/	
		
	$('.global-header').css({		
		'background-image':'url(' + photo + ')'
	});	
	
	instaPic.caption(photo, link);	
};

InstaPic.prototype.caption = function(photo, link) {
	var caption = '<div id="insta-caption"><a href="' + link + '" target="_blank" title="See full photo on Instagram">See full photo on Instagram</a></div>';
	$(caption).hide().delay(3000).appendTo('.global-header .row').slideDown('slow');	
};

var instaPic = new InstaPic();
instaPic.get();
