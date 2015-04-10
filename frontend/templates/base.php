<html>
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<!-- jQuery -->
	<script src="<?php echo THIRDPARTY."jquery/jquery.js"; ?>"></script>
	<script src="<?php echo THIRDPARTY."jquery/jquery-mig.js"; ?>"></script>
	<!-- Less & Styles -->
	<link rel="stylesheet/less" type="text/css" href="<?php echo LESS."index.less"; ?>" />
	<script src="<?php echo THIRDPARTY."less.min.js"; ?>"></script>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo THIRDPARTY."fontawesome/css/font-awesome.min.css"; ?>">
</head>
<body>
	<?php

	// Handle sidepanel
	if (!isset($this->data["sidepanel"]) || (isset($this->data["sidepanel"]) && !$this->data["sidepanel"])){
		include "sidepanel.php";
	}
	if (isset($this->data["page"])){
		if ($this->data["page"]=="home"){ include "home.php"; }
	}

	?>
</body>
</html>