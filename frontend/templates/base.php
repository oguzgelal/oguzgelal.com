<html>
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo THIRDPARTY."fontawesome/css/font-awesome.min.css"; ?>">
	<!-- Scripts -->
	<script src="<?php echo JS."sidebar.js"; ?>"></script>
	<script src="<?php echo JS."fancyenter.js"; ?>"></script>
</head>
<body>
	<?php

	// Handle sidepanel
	if (!isset($this->data["sidepanel"]) || (isset($this->data["sidepanel"]) && !$this->data["sidepanel"])){
		include "sidepanel.php";
	}

	// Load Page Contents
	if (isset($this->data["page"])){
		if ($this->data["page"]=="home"){ include "home.php"; }
		else if ($this->data["page"]=="portfolio"){ include "portfolio.php"; }
		else if ($this->data["page"]=="resume"){ include "resume.php"; }
		else if ($this->data["page"]=="blog"){ include "blog.php"; }
		else if ($this->data["page"]=="contact"){ include "contact.php"; }
		else{ include "notfound.php"; }
	}

	?>
</body>
</html>