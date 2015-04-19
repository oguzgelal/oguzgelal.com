var togglewidth = 800;

// After user toggles the sidepanel, the autotoggle should switch off untill page reload.
var toggled = false;


$(document).ready(function(){

	// ios devices doesnt register click event so click or touch is determined on page start.
	var click =((document.ontouchstart!==null)?'click':'touchstart');

	// fix for sidebar ios scroll issue
	var lastY;
	$(document).on('touchstart', function(){ lastY = e.originalEvent.touches[0].clientY; });
	$('.sidepanel').on('touchmove', function(e){
		var sctop = $(this).scrollTop();
		var currentY = e.originalEvent.touches[0].clientY;
		if(currentY > lastY){
			var dif = currentY - lastY;
			$(this).scrollTop(sctop-dif);
		}
		else if(currentY < lastY){
			var dif = lastY - currentY;
			$(this).scrollTop(sctop+dif);
		}
		lastY = currentY;
	});

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


	$(document).on(click, '.sidepanel-toggle-btn', function(e){
		toggled = true;
		sidepanelToggle();
		e.stopPropogation();
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
	$('.sidepanel').height($('.page').height());
	$('.sidepanel-elems').height($('.page').height());
};

