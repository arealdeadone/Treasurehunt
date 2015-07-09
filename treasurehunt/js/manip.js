var main = function()
{
	$(".user_entry").mouseenter(function(event){
		$(".user_entry").animate({
			opacity: '+=0.5'
		}, "fast");
	});
	$(".user_entry").mouseleave(function(event){
		$(".user_entry").animate({
			opacity: '0.95'
		}, "fast");
	});
}
$(document).ready(main);