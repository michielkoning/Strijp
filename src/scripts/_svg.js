if (!Modernizr.svg) {
	$("img[src$='.svg']").each(function(){
		var $img = $(this),
			src = $img.attr("src"),
			newSrc = src.replace(".svg", ".png");
		$img.attr("src", newSrc);
	});
}