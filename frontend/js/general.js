
$(document).ready(function(){
	
	fitPageWithSidepanel();
	// workaround to fix the race condition on safari
	setTimeout(function(){ fitPageWithSidepanel(); },100);
	$(window).on("resize", function(){
		fitPageWithSidepanel();
		// workaround for safari window resize timing issue
		delay(function(){ fitPageWithSidepanel(); }, 100);
	});

});


var fitPageWithSidepanel = function(){
	var sidepanel = $('.sidepanel');
	var page = $('.page');
	var setWidth = $(window).width() - sidepanel.width();
	page.width(setWidth);
}

var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();