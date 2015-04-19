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
<div class="page blogpost">
	<div class="blogpost-cover" style="background-image: url(<?php echo BLOG.$post["cover"]; ?>); background-size: auto auto; background-position: center;;">
		<div class="blogpost-posttime"><i class="fa fa-calendar-o"></i> <?php echo $readableTime; ?></div>
		<div class="blogpost-title fancy-enter-bounce"><?php echo $post["title"]; ?></div>
	</div>
	<div class="blogpost-wrapper">
		<div class="blogpost-row blogpost-infotiles" style="margin-top: 30px;">
			<?php echo $post["content"]; ?>
		</div>
	</div>
</div>