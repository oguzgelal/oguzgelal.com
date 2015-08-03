<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	
	<?php
	$title      = "Zipf's Law of the Internet: Explaining Online Behavior";
	$link       = "http://blog.parsely.com/post/57821746552";
	$imageURL   = "http://blog.parsely.com/inline_mra670hTvL1qz4rgp.png";
	$section    = "Programming";
	$author     = "Alan Alexander Milne";
	$tags       = array("Programming", "traffic", "local");
	$pubDate    = DateTime::createFromFormat("Y-m-d H:i:s P", "2012-01-01 11:34:02 -05:00");

	function getCleanParselyPageValue($val) {
		$val = str_replace("\n", "", $val);
		$val = str_replace("\r", "", $val);
		return $val;
	}

	$parselyPage = array();
	$parselyPage["title"]       = getCleanParselyPageValue($title);
	$parselyPage["link"]        = $link;
	$parselyPage["image_url"]   = $imageURL;
	$parselyPage["type"]        = "post";
	$parselyPage["post_id"]     = "57821746552";
	$parselyPage["pub_date"]    = gmdate("Y-m-d\TH:i:s\Z", $pubDate->getTimestamp());
	$parselyPage["section"]     = getCleanParselyPageValue($section);
	$parselyPage["author"]      = getCleanParselyPageValue($author);
	$parselyPage["tags"]        = $tags;

	$output = "<meta name='parsely-page' content='" . json_encode($parselyPage, JSON_HEX_APOS | JSON_HEX_QUOT) . "' />";
	?>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-43205300-1', 'oguzgelal.com');
	ga('send', 'pageview');

	</script>
	
	<?php
	if ($this->data["page"]=="blogpost"){ include "blogpost_head.php"; }
	else { ?><title>Oguz Gelal | Personal Website & Blog</title><?php }
		?>
	
	<!-- embed SocialSurf -->
	<script type="text/javascript" src="https://socialsurf.io/embed/v/1-0-1/embed.min.js"></script>

	<!-- jQuery -->
	<script src="<?php echo THIRDPARTY."jquery/jquery.js"; ?>"></script>
	<script src="<?php echo THIRDPARTY."jquery/jquery-mig.js"; ?>"></script>
	
	<?php if (COMPILE_LESS){ ?>
	<!-- Less & Styles -->
	<link rel="stylesheet/less" type="text/css" href="<?php echo LESS."index.less"; ?>" />
	<script src="<?php echo THIRDPARTY."less.min.js"; ?>"></script>		
	<?php } else{ ?>
	<!-- Precompiled Less -->
	<link rel="stylesheet" href="<?php echo STYLE."style.min.css"; ?>">
	<?php } ?>
	<!-- Thirdparty -->
	<link rel="stylesheet" href="<?php echo THIRDPARTY."fontawesome/css/font-awesome.min.css"; ?>">
	<link rel="stylesheet" href="<?php echo THIRDPARTY."powertip/css/jquery.powertip.min.css"; ?>">
	<link rel="stylesheet" href="<?php echo THIRDPARTY."sweetalert/sweetalert.css"; ?>">
	<script src="<?php echo THIRDPARTY."powertip/jquery.powertip.min.js"; ?>"></script>
	<script src="<?php echo THIRDPARTY."sweetalert/sweetalert.min.js"; ?>"></script>
	<!-- Scripts -->
	<script src="<?php echo JS."general.js"; ?>"></script>
	<script src="<?php echo JS."sidebar.js"; ?>"></script>
	<script src="<?php echo JS."fancyenter.js"; ?>"></script>
	

	<!-- Blog Specific -->
	<?php if ($this->data["page"]=="blog"){ ?>
	<script src="<?php echo JS."blog.js"; ?>"></script>
	<?php } ?>
	<!-- Resume Specific -->
	<?php if ($this->data["page"]=="resume"){ ?>
	<script src="<?php echo THIRDPARTY."chart.min.js"; ?>"></script>
	<script src="<?php echo JS."resume.js"; ?>"></script>
	<?php } ?>
	<!-- Contact Specific -->
	<?php if ($this->data["page"]=="contact"){ ?>
	<script src="<?php echo JS."contact.js"; ?>"></script>
	<?php } ?>

</head>
<body>
	<?php

	// Handle sidepanel
	if (!isset($this->data["sidepanel"]) || (isset($this->data["sidepanel"]) && $this->data["sidepanel"])){
		include "sidepanel.php";
	}

	// Load Page Contents
	if (isset($this->data["page"])){
		if ($this->data["page"]=="home"){ include "home.php"; }
		else if ($this->data["page"]=="portfolio"){ include "portfolio.php"; }
		else if ($this->data["page"]=="resume"){ include "resume.php"; }
		else if ($this->data["page"]=="blog"){ include "blog.php"; }
		else if ($this->data["page"]=="blogpost"){ include "blogpost.php"; }
		else if ($this->data["page"]=="contact"){ include "contact.php"; }
		else{ include "notfound.php"; }
	}

	?>

	<!-- !!!!! TODO : Remove Parsly !!!!! -->
	<!-- START Parse.ly Include: Standard -->
	<div id="parsely-root" style="display: none">
		<div id="parsely-cfg" data-parsely-site="oguzgelal.com"></div>
	</div>
	<script>
	(function(s, p, d) {
		var h=d.location.protocol, i=p+"-"+s,
		e=d.getElementById(i), r=d.getElementById(p+"-root"),
		u=h==="https:"?"d1z2jf7jlzjs58.cloudfront.net"
		:"static."+p+".com";
		if (e) return;
		e = d.createElement(s); e.id = i; e.async = true;
		e.src = h+"//"+u+"/p.js"; r.appendChild(e);
	})("script", "parsely", document);
	</script>
	<!-- END Parse.ly Include -->

</body>
</html>