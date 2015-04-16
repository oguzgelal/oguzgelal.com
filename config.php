<?php
# Change to false while deploying to the server
define("LOCAL", false);
# True compiles less on the fly.
# False loads the pre-compiled css at /frontend/assets/style/style.min.css
define("COMPILE_LESS", false);

session_name('oguzgelal');
if(session_id() == ''){ session_start(); }

# DB Related
define("PDO_PARAM_INT", PDO::PARAM_INT);
define("PDO_FETCH_ASSOC", PDO::FETCH_ASSOC);

# PATH Settings
define("ROOT", "/");
define("VIEWS", "frontend/");
define("TEMPLATES", VIEWS."templates/");
define("THIRDPARTY", VIEWS."thirdparty/");
define("LESS", VIEWS."less/");
define("JS", VIEWS."js/");
define("ASSETS", VIEWS."assets/");
define("IMGS", ASSETS."img/");
define("STYLE", ASSETS."style/");

# DOMAIN Settings
define("PREFIX", "http://");
if (LOCAL){ define( "DOMAIN", "localhost:8888" ); }
else{ define( "DOMAIN", "oguzgelal.com" ); }

