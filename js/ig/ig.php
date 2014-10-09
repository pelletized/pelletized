http://pelletized.com/ig/ig.json


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
	//returnPhotos();
	
	$.getJSON('ig.json', function(data) { 
	
		var len = 3;
		for (var i = 0; i < len; i++) {
		  var photo = data.data[Math.floor(Math.random()*data.data.length)].images.low_resolution.url;		  
		  photo = '<img src="' + photo + '" />';
		  $("ul.ig").append('<li>' + photo + '</li>');
		  //console.log(data.data.length);
		  
	  }
	});


});
/*
function returnPhotos() {	
	var url = "ig.json";	
	$.getJSON(url, function(data) {
		//var len = data.data.length;
		var len = 3;
		for (var i = 0; i < len; i++) {
			name = data.data[i].user.username;
			photo = data.data[i].images.low_resolution.url;			
			instaUrl = "http://instagram.com/" + name;			
			photo = '<img src="' + photo + '" />';
			link = '<a href="' + data.data[i].link + '" target="_blank">' + photo + '</a>';
			
			$("ul.ig").append('<li>' + link + '</li>');			
		}		
					
	});
	
}
*/
</script>

<ul class="ig"></ul>




