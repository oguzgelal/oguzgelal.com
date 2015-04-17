$(document).ready(function(){
	enterBounce();
	enterPortfolio();
});

var enterBounce = function(){
	var delay = 100;
	var enterElems = $('.fancy-enter-bounce');
	for(var i = 0; i < enterElems.length; i++){
		$(enterElems[i]).css("animation-delay", "."+i+"s");
		$(enterElems[i]).css("-webkit-animation-delay", "."+i+"s");
		$(enterElems[i]).addClass('animated bounceIn');
	}
}

var enterPortfolio = function(){
	var delay = 100;
	var enterElems = $('.fancy-enter-portfolio');
	for(var i = 0; i < enterElems.length; i++){
		$(enterElems[i]).css("animation-delay", "."+i+"s");
		$(enterElems[i]).css("-webkit-animation-delay", "."+i+"s");
		if ($(window).width() > 800){ $(enterElems[i]).addClass('animated flipInX'); }
		else{ $(enterElems[i]).addClass('animated bounceInLeft'); }
		
	}
}