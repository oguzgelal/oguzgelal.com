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
}
?>
<title><?php echo $post["title"]." | Oguz's Blog"; ?></title>
<!-- Twitter Card data -->
<meta name="twitter:card" content="photo">
<meta name="twitter:site" content="@OguzGelal">
<meta name="twitter:title" content="<?php echo $post["title"]." | Oguz's Blog"; ?>">
<meta name="twitter:description" content="Oguz Gelal | Personal Website & Blog">
<meta name="twitter:image" content="<?php echo PREFIX.DOMAIN.BLOG.$post["cover"]; ?>">
<meta name="twitter:url" content="<?php echo PREFIX.DOMAIN."/blog/post/".$post["id"]; ?>">
<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $post["title"]." | Oguz's Blog"; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo PREFIX.DOMAIN."/blog/post/".$post["id"]; ?>" />
<meta property="og:image" content="<?php echo PREFIX.DOMAIN.BLOG.$post["cover"]; ?>" />
<meta property="og:description" content="Oguz Gelal | Personal Website & Blog" /> 
<meta property="og:site_name" content="Oguz Gelal" />