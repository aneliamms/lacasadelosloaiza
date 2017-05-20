$('.toggle-button').on('click', function(){

	if($(this).find('span').hasClass('glyphicon-remove')){
		$(this).find('span').removeClass('glyphicon-remove');
		$(this).find('span').addClass('glyphicon-menu-hamburger');
	}
	else{
		$(this).find('span').addClass('glyphicon-remove');
		$(this).find('span').removeClass('glyphicon-menu-hamburger');
	}
});

