<html>
<head>
	<title>Welcome to OguzGelal.com</title>
	<meta charset="UTF-8">

	<script src="<?php echo THIRDPARTY."jquery/jquery.js"; ?>"></script>
	<script src="<?php echo THIRDPARTY."jquery/jquery-mig.js"; ?>"></script>

	<link rel="stylesheet/less" type="text/css" href="<?php echo LESS."index.less"; ?>" />
	<script src="<?php echo THIRDPARTY."less.min.js"; ?>"></script>
</head>
<body>
	
	<div class="home-wrapper">
		<?php


		if ($this->data["page"]=="home"){
			include "home.php";
		}

		?>
	</div>

</body>
</html>