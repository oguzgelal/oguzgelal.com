<?php
/* Change to false while deploying to the server */
define("LOCAL", false);

session_name('oguzgelal');
if(session_id() == ''){ session_start(); }

# PATH settings
define("ROOT", "/");
define("VIEWS", "frontend/");
define("TEMPLATES", VIEWS."templates/");
define("THIRDPARTY", VIEWS."thirdparty/");
define("LESS", VIEWS."less/");
define("JS", VIEWS."js/");

# DOMAIN Settings
define("PREFIX", "http://");
if ($local){ define( "DOMAIN", "localhost:8888" ); }
else{ define( "DOMAIN", "oguzgelal.com" ); }

