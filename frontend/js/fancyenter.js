$(document).ready(function(){
	enterBounce();
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