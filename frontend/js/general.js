$(document).ready(function(){
	// general tooltip
	$('.tooltip').powerTip({ fadeInTime: 0 });

	$('.resume-warning').powerTip({
		fadeInTime: 0,
		placement: 's'
	});
	$('.portfolio-recent').powerTip({
		fadeInTime: 0,
		placement: 's'
	});
	$('.portfolio-simple').powerTip({
		fadeInTime: 0,
		placement: 's'
	});

	// control sidebar tooltips
	$(document).on('mouseenter', '.sidepanel-item', function(){
		var currentElem = $(this);
		$.powerTip.destroy($('.sidepanel-item'));
		if ($('.sidepanel').hasClass('mobile')){
			currentElem.powerTip({
				fadeInTime: 0,
				placement: 'e'
			});
			$.powerTip.show(currentElem, {
				fadeInTime: 0,
				placement: 'e'
			});
		}
		else{ $.powerTip.destroy(currentElem); }
	});
	$(document).on('mouseleave', '.sidepanel-item', function(){ $.powerTip.destroy($(this)); });
	
});