$(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 250,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 500,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$('.main-wrapper').scroll(function(){
		console.log(1);
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('.main-wrapper').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});