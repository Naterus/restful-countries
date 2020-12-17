(function($) {
	"use strict"; 
	
	$(document).ready(function(){
		var window_width = $(window).width();
		if (window_width > 1024){
			releft_mega(window_width);
		}
		return false;
	});

	$(window).on('resize',function(){
		var window_width = $(window).width();
		if (window_width > 1024){
			releft_mega(window_width);
		}else{
			$(".nav .sub-menu").attr('style','');
		}
		return false;
	});

	$(".nav .menu a,.nav .menu h3").on('click',function(event){
		var selector = $(this),
			next = selector.next();
		if (selector.next().length){
			event.preventDefault();
			if ($(window).width() < 1025){
				next.stop().slideToggle(200);
				selector.toggleClass("active");
			}
		}
	});

	$(".js__menu_button").on('click',function(){
		$(".nav").toggleClass("active");
		return false;
	});

	$(".js__close_menu").on('click',function(){
		$(".nav").removeClass("active");
		return false;
	});

	$("#wrapper").on('click',function(event){
		var target = $(event.target);
		if (target.hasClass('nav') || target.hasClass('js__menu_button') || target.parents('.nav').length || target.parents('.js__menu_button').length){

		}else{
			$(".nav").removeClass("active");
		}
	});


	function releft_mega(window_width){
		if ($("html").attr('dir') == 'rtl'){
			$(".mega").each(function(){
				var selector = $(this),
					width = selector.outerWidth(),
					left = selector.offset().left,
					container_width = $(".nav-horizontal .container").outerWidth() - 40,
					new_width = ( window_width - container_width ) / 2;
				if (left < new_width){
					selector.css({
						'right'	: 	- new_width
					})
				}
			});	
		}else{
			$(".mega").each(function(){
				var selector = $(this),
					width = selector.outerWidth(),
					left = selector.offset().left,
					container_width = $(".nav-horizontal .container").outerWidth() - 40,
					new_width = window_width - ( window_width - container_width ) / 2;
				if (width + left > new_width){
					selector.css({
						'left'	: 	new_width - width - left
					})
				}
			});
		}
		return false;
	}
	
})(jQuery);