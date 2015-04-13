$(document).ready(function(){
	
	fitPageWithSidepanel();
	$(window).on("resize", function(){ fitPageWithSidepanel(); });
	
});


function fitPageWithSidepanel(){
	var sidebar = $('.sidepanel');
	var page = $('.page');

	var setWidth = $(window).width() - sidebar.width();
	page.width(setWidth);
}