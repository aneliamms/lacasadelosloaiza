$(document).ready(function(){
	$('.responsive-menu ul').children('.logo-menu').prependTo('ul');
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
		if($(this).hasClass('open')){
			$('.responsive-menu .menu-header-container').slideDown('slow');
		}else{
			$('.responsive-menu .menu-header-container').slideUp('slow');
		}
	});
});
