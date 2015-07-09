var main = function ()
{
	$("#1").mouseenter(function(event){
		$("#1").animate({
			height: '+=200px',
			width: '+=200px'
		}, "fast").css("url","../images/20.jpg");
		$("#2").hide();
		$("#3").hide();
		$("#4").hide();
	});
	$("#2").mouseenter(function(event){
		$("#2").animate({
			height: '+=200px',
			width: '+=200px',
			url: '../images/20.jpg'
		}, "fast");
		$("#1").hide();
		$("#3").hide();
		$("#4").hide();
	});
	$("#3").mouseenter(function(event){
		$("#3").animate({
			height: '+=200px',
			width: '+=200px',
			url: '../images/20.jpg'
		}, "fast");
		$("#2").hide();
		$("#1").hide();
		$("#4").hide();
	});
	$("#4").mouseenter(function(event){
		$("#4").animate({
			height: '+=200px',
			width: '+=200px',
			url: '../images/20.jpg'
		}, "fast");
		$("#2").hide();
		$("#3").hide();
		$("#1").hide();
	});
	$("#1").mouseleave(function(event){
		$("#1").animate({
			height: '-=200px',
			width: '-=200px',
			url: 'images/arvind.jpg'
		}, "fast");
		$("#2").show();
		$("#3").show();
		$("#4").show();
	});
	$("#2").mouseleave(function(event){
		$("#2").animate({
			height: '-=200px',
			width: '-=200px',
			url: 'images/arvind.jpg'
		}, "fast");
		$("#1").show();
		$("#3").show();
		$("#4").show();
	});
	$("#3").mouseleave(function(event){
		$("#3").animate({
			height: '-=200px',
			width: '-=200px',
			url: '../images/arvind.jpg'
		}, "fast");
		$("#2").show();
		$("#1").show();
		$("#4").show();
	});
	$("#4").mouseleave(function(event){
		$("#4").animate({
			height: '-=200px',
			width: '-=200px',
			url: '../images/arvind.jpg'
		}, "fast");
		$("#2").show();
		$("#3").show();
		$("#1").show();
	});
}

$(document).ready(main);