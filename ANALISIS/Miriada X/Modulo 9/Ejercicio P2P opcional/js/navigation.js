var ww = document.body.clientWidth;

$(document).ready(function() {
	$(".navegar li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".menu-desplegable").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".navegar").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww <= 768) {
		$(".menu-desplegable").css("display", "inline-block");
		if (!$(".menu-desplegable").hasClass("active")) {
			$(".navegar").hide();
		} else {
			$(".navegar").show();
		}
		$(".navegar li").unbind('mouseenter mouseleave');
		$(".navegar li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww > 768) {
		$(".menu-desplegable").css("display", "none");
		$(".navegar").show();
		$(".navegar li").removeClass("hover");
		$(".navegar li a").unbind('click');
		$(".navegar li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

