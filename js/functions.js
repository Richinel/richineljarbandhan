$(document).ready(function() {
	$('.menu_container').click(function(){
		$('.mobile_menu').fadeToggle(200);
	});

	$('.projects_btn').click(function(){
		$('.projects_overlay').fadeToggle(200);
	});

	$('.close').click(function(){
		$('.projects_overlay').fadeToggle(200);
	});

	$(".menu_container").click(function() {
	    $.each($('.mob_p'), function(i, el){
		    $(el).css({'opacity':0, 'top': '50px'});
		    
		    setTimeout(function(){
		       $(el).animate({
		        'opacity':1.0,
		        'top': '0px'
		       }, 350);
		    },200 + ( i * 50 ));
		});
	});

    $.each($('.load'), function(i, el){
	    $(el).css({'opacity':0});
	    
	    setTimeout(function(){
	       $(el).animate({
	        'opacity':1.0,
	       }, 450);
	    },100 + ( i * 250 ));
	});

	$('.contact_form_btn, .contact_head').click(function() {
		$('.html,body').animate({
			scrollTop: $('.contact').offset().top
		}, 800);
	});

	$('.mob_p').click(function(){
		$('.mobile_menu').fadeToggle(200);
	});
});


