$document.ready(function(){
	$('.btn-share').click(function(event){
		event.preventDefault();

		var $el = $(this),
			url = $el.attr('href');

		window.open(url, "Delen", "height=300, width=500");
	});
});
