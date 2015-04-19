<?php
if (!isset($this->data["id"])){
	$app = \Slim\Slim::getInstance();
	$app->notFound();
}
else {
	$getid = stripslashes(filter_var($this->data["id"] , FILTER_SANITIZE_MAGIC_QUOTES ));
	$postsObj = new \Resource\Blogposts($getid);
	$post = $postsObj->get();
	if (count($post) == 0){ $app->notFound(); }
	$post = $post[0];

	$date = new DateTime($post["posttime"]);
	$timestamp = $date->getTimestamp();
	$readableTime = date("M jS, Y", $timestamp);
}
?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5533f00f0f647afd" async="async"></script>

<div class="page blogpost">
	<div class="blogpost-cover" style="background-image: url(<?php echo BLOG.$post["cover"]; ?>); background-size: auto auto; background-position: center;;">
		<div class="blogpost-posttime"><i class="fa fa-calendar-o"></i> <?php echo $readableTime; ?></div>
		<div class="blogpost-title animated tada"><?php echo $post["title"]; ?></div>
	</div>
	<div class="blogpost-wrapper">
		<div class="blogpost-row blogpost-infotiles" style="margin-top: 30px;">
			<?php echo $post["content"]; ?>
		</div>
		<div class="blogpost-row" style="margin-top: 30px;">
			<div class="addthis_sharing_toolbox"></div>
		</div>
		<div class="blogpost-row">
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES * * */
			var disqus_shortname = 'oguzgelal';
			var disqus_title = '<?php echo $post["title"]; ?>';

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div>
	</div>
</div>



