$(document).ready(function(){

	// load images async
	var posts = $('.blog-post');
	for(var i=0; i<posts.length; i++){
		var postid = $(posts[i]).attr('id');
		var imgsrc = $(posts[i]).data('img');
		var imgmtop = $(posts[i]).data('margintop');
		var img = $("<img />");
		img.addClass('blog-post-bgimg');
		img.attr('src', imgsrc);
		img.css('margin-top', imgmtop+'px');
		img.data('append-to', postid);
		img.load(function() {
			if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) { console.log("broken image"); }
			else {
				var appendId = $(this).data('append-to');
				$('.blog-post#'+appendId).find('.blog-post-hover').prepend($(this));
			}
		});
	}

});