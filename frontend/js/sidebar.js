var togglewidth = 800;
var toggled = false;


$(document).ready(function(){

	// for hiding scrollbar on sidepanel
	resizeSidebarHeight();
	setTimeout(function(){ resizeSidebarHeight(); },1000);
	$(window).on("resize", function(){ resizeSidebarHeight(); });


	fitPageWithSidepanel();
	// workaround to fix the race condition on safari
	setTimeout(function(){ fitPageWithSidepanel(); },500);
	$(window).on("resize", function(){
		fitPageWithSidepanel();
		// workaround for safari window resize timing issue
		delay(function(){ fitPageWithSidepanel(); }, 500);
	});


	$(document).on('click', '.sidepanel-toggle-btn', function(){
		toggled = true;
		sidepanelToggle();
	});

});


var fitPageWithSidepanel = function(){
	if (!toggled){
		if ($(window).width() < togglewidth){ sidepanelMobile("on"); }
		else{ sidepanelMobile("off"); }
	}
	var sidepanel = $('.sidepanel');
	var page = $('.page');
	var setWidth = $(window).width() - sidepanel.width();
	page.width(setWidth);
}

var sidepanelMobile = function(condition){
	if (condition=="on"){ $('.sidepanel').addClass('mobile'); }
	else if (condition=="off"){ $('.sidepanel').removeClass('mobile'); }
}

var sidepanelToggle = function(){
	if ($('.sidepanel').hasClass('mobile')){ sidepanelMobile("off"); }
	else{ sidepanelMobile("on"); }
	fitPageWithSidepanel();
}


var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

var resizeSidebarHeight = function(){
	console.log("set to "+$(window).height());
	$('.sidepanel').height($(window).height());
	$('.sidepanel-elems').height($(window).height());
}