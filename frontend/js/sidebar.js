var togglewidth = 800;

// After user toggles the sidepanel, the autotoggle should switch off untill page reload.
var toggled = false;


$(document).ready(function(){

	// for fixing issue on mobile where the page contents appears when scrolled down
	$(window).on("resize", function(){ hidePageWhenCondensed();	});

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

var hidePageWhenCondensed = function(){
	var hideMinWidth = 200;
	var windowWidth = $(window).width();
	var sidebarWidth = $('.sidepanel').width();
	if (windowWidth-sidebarWidth < hideMinWidth){ $('.page').hide(); }
	else{ $('.page').show(); }
};

var fitPageWithSidepanel = function(){
	if (!toggled && !$('.sidepanel').hasClass('default_mobile')){
		if ($(window).width() < togglewidth){ sidepanelMobile("on"); }
		else{ sidepanelMobile("off"); }
	}
	var sidepanel = $('.sidepanel');
	var page = $('.page');
	var setWidth = $(window).width() - sidepanel.width();
	page.width(setWidth);
};

var sidepanelMobile = function(condition){
	if (condition=="on"){ $('.sidepanel').addClass('mobile'); }
	else if (condition=="off"){ $('.sidepanel').removeClass('mobile'); }
	hidePageWhenCondensed();
};

var sidepanelToggle = function(){
	if ($('.sidepanel').hasClass('mobile')){ sidepanelMobile("off"); }
	else{ sidepanelMobile("on"); }
	fitPageWithSidepanel();
};


var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

var resizeSidebarHeight = function(){
	console.log("set to "+$('.page').height());
	$('.sidepanel').height($('.page').height());
	$('.sidepanel-elems').height($('.page').height());
};

