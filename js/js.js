$(document).ready(function(e) {
    $('.menu-button').live('mouseover', hover);
	$('.menu-button').live('mouseout', out);
});

function hover()
{
	//alert($(this));
	$(this).find('.menu-left').css('background-position', 'bottom');
	$(this).find('.menu-right').css('background-position', 'bottom');
	$(this).find('a').css('background-position', 'bottom');
}

function out()
{
	$(this).find('.menu-left').css('background-position', 'top');
	$(this).find('.menu-right').css('background-position', 'top');
	$(this).find('a').css('background-position', 'top');
}