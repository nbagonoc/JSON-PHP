/*$(document).ready(function(){
	$.getJSON('data.json', function(data){
		
		var output = '<ul class="list-group">';
		
		$.each(data, function(key, val){
			output += '<li class="list-group-item">';
			output += '<p class="text-center">' + val.name + '</p>';
			output += '<img src="'+ val.image +'" class="center-block img-responsive"></li>';
		});
		
		output += '</ul>';

		$('.content').html(output);
	});
});*/